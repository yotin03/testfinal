<?php include "../config.php"; ?>
<?php 
$add_id = $_GET['add_id'];
$sql = "DELETE FROM tbl_addnums WHERE add_id ='$add_id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/add_num.php");
?>