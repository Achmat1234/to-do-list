<?php
session_start();
// unset($_SESSION['todo']);
$todo = $_POST['todo_input'];
$submit = $_POST['submit'];
$delete_todo = $_GET['delete'];
$_SESSION['todo'][] = [
    "todo_item" => $todo,
    "delete" => $delete_todo
];
if (isset($todo)) {
    header("location:index.php");
}
