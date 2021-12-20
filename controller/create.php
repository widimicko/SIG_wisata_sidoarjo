<?php
include '../model/connection.php';
session_start();

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $category = $_POST['category'];
  $description = $_POST['description'];
  $lat = $_POST['lat'];
  $lng = $_POST['lng'];
  
  $sql = "INSERT INTO tourism (name, category, description, lat, lng) VALUE ('$name', '$category', '$description', '$lat', '$lng');";
  $query = mysqli_query($connection, $sql);
  
  if ($query) {
    $_SESSION['status'] = 'success';
    $_SESSION['message'] = 'Data "'.$name.'" berhasil ditambahkan';
    header('Location: ../view/index.php');

  } else {
    $_SESSION['status'] = 'failed';
    $_SESSION['message'] = 'Data "'.$name.'" gagal ditambahkan';
    header('Location: ../view/index.php');
  }
}

?>