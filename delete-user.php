<?php 
$id = $_GET['id'];
include('config.php');


$sql = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('Location: display.php');
  
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}




?>
