<?php include "../config.php"; ?>
<?php 
 $status_id = $_POST["status_id"];
 $status_name = $_POST["status_name"];

 $sql = "INSERT INTO tbl_status (status_id, status_name)
VALUES ('$status_id', '$status_name')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/add_status.php");
?>