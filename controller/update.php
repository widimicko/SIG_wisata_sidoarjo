<?php
include '../model/connection.php';
session_start();

if(isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $category = $_POST['category'];
  $description = $_POST['description'];
  $lat = $_POST['lat'];
  $lng = $_POST['lng'];

  $sql = "UPDATE tourism  SET name = '$name', category = '$category',  description = '$description', lat = '$lat', lng = '$lng' WHERE id = '$id';";
  $query = mysqli_query($connection, $sql);
  
  if ($query) {
    $_SESSION['status'] = 'success';
    $_SESSION['message'] = 'Data "'.$name.'" berhasil diubah';
    header('Location: ../view/index.php');

  } else {
    $_SESSION['status'] = 'failed';
    $_SESSION['message'] = 'Data "'.$name.'" gagal diubah';
    header('Location: ../view/index.php');
  }
}

?>