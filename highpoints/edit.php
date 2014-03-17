<?php
require_once "db.php";
session_start();

if (isset($_POST['title']) && isset($_POST['plays']) 
     && isset($_POST['rating']) && isset($_POST['id'])){
    if ($_POST['title'] == "" || $_POST['plays'] <= 0 || $_POST['rating'] <= 0) {
        $_SESSION['error'] = 'Bad value for title, plays, or ratings';
        header('Location: index.php') ;
        return;
    }
    $sql = "UPDATE tracks SET title = :title, 
            plays = :plays, rating = :rating
            WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':title' => $_POST['title'],
        ':plays' => $_POST['plays'],
        ':rating' => $_POST['rating'],
        ':id' => $_POST['id']));
    $_SESSION['success'] = 'Record updated';
    header('Location: index.php') ;
    return;
}

$stmt = $pdo->prepare("SELECT * FROM tracks where id = :xyz");
$stmt->execute(array(":xyz" => $_GET['id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    $_SESSION['error'] = 'Bad value for id';
    header('Location: index.php') ;
    return;
}

$n = htmlentities($row['title']);
$e = htmlentities($row['plays']);
$p = htmlentities($row['rating']);
$id = htmlentities($row['id']);

echo <<< _END
<p>Edit Track</p>
<form method="post">
<p>Title:
<input type="text" name="title" value="$n"></p>
<p>Plays:
<input type="text" name="plays" value="$e"></p>
<p>Rating:
<input type="text" name="rating" value="$p"></p>
<input type="hidden" name="id" value="$id">
<p><input type="submit" value="Update"/>
<a href="index.php">Cancel</a></p>
</form>
_END
?>