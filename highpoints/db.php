<?php
$pdo = new PDO('mysql:host=localhost;dbname=si364','justin','tree');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>