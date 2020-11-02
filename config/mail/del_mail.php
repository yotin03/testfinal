<?php include "../config.php"; ?>
<?php 
$mail_id = $_GET['mail_id'];
$sql = "DELETE FROM tbl_mail WHERE mail_id ='$mail_id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/showlistmail.php");
?>