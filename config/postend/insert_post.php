<?php include "../config.php"; ?>
<?php 
 $post_id = $_POST["post_id"];
 $post_name = $_POST["post_name"];

 $sql = "INSERT INTO tbl_postscript (post_id, post_name)
VALUES ('$post_id', '$post_name')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/add_post.php");
?>