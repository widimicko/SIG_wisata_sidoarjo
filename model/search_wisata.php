<?php
  include './connection.php';


  $search = isset($_GET['search']) ? $_GET['search'] : '';
  $query = "SELECT * FROM tourism WHERE name LIKE '%$search%'";

  $result = mysqli_query($connection, $query) or die('Error query : '. $query);

  $data = array();
  while ($row = mysqli_fetch_object($result)) {
      $data[] = $row;
  }

  $response = array(
    'status' => 200,
    'message' => 'Success Fetch List Wisata',
    'data' => $data
  );

  header('Content-Type: application/json');
  echo json_encode($response);
?>
