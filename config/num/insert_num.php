<?php include "../config.php"; ?>
<?php 
 $add_id = $_POST["add_id"];
 $add_shortname = $_POST["add_shortname"];
 $add_fullname = $_POST["add_fullname"];

 $sql = "INSERT INTO tbl_addnums (add_id, add_shortname, add_fullname)
VALUES ('$add_id', '$add_shortname', '$add_fullname')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/add_num.php");
?>