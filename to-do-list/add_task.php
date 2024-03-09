<?php
session_start();

if(isset($_POST['submit'])) {
    if(!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }
    $task = $_POST['task'];
    array_push($_SESSION['tasks'], $task);
}

header("Location: index.html");
exit();
?>
