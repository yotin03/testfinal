<?php include "../config.php"; ?>
<?php 
$post_id = $_GET['post_id'];
$sql = "DELETE FROM tbl_postscript WHERE post_id ='$post_id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/add_post.php");
?>