<?php
require_once "db.php";
session_start();

if (isset($_POST['title']) && isset($_POST['plays']) 
     && isset($_POST['rating'])){
    if ($_POST['title'] == "" || $_POST['plays'] <= 0 || $_POST['rating'] <= 0) {
        $_SESSION['error'] = 'Bad value for title, plays, or ratings';
        header('Location: index.php') ;
        return;
    }
    $sql = "INSERT INTO tracks (title, plays, rating) 
              VALUES (:title, :plays, :rating)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':title' => $_POST['title'],
        ':plays' => $_POST['plays'],
        ':rating' => $_POST['rating']));
   $_SESSION['success'] = 'Record Added';
   header('Location: index.php') ;
   return;
}

?>
<p>Add A New Track</p>
<form method="post">
<p>Title:
<input type="text" name="title"></p>
<p>Plays:
<input type="text" name="plays"></p>
<p>Rating:
<input type="text" name="rating"></p>
<p><input type="submit" value="Add New"/>
<a href="index.php">Cancel</a></p>
</form>