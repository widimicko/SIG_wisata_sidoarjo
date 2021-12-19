<?php
include '../model/connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM tourism WHERE id = '$id'";
$query = mysqli_query($connection, $sql);

if ($query) {
  header('Location: ../view/index.php');
} else {
  echo "Failed Delete";
}


?>