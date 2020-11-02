<?php include "../config.php"; ?>
<?php 
$status_id = $_GET['status_id'];
$sql = "DELETE FROM tbl_status WHERE status_id ='$status_id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/add_status.php");
?>