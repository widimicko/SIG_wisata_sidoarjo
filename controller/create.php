<?php
include '../model/connection.php';

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $category = $_POST['category'];
  $description = $_POST['description'];
  $lat = $_POST['lat'];
  $lng = $_POST['lng'];
  
  $sql = "INSERT INTO tourism (name, category, description, lat, lng) VALUE ('$name', '$category', '$description', '$lat', '$lng');";
  $query = mysqli_query($connection, $sql);
  
  if ($query) {
    header('Location: ../view/index.php');
  } else {
    echo "Failed Insert";
  }
}

?>