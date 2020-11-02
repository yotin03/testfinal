<?php include "../config.php"; ?> <!--เรียกใช้ไฟล์ติดต่อฐานข้อมูล-->
<?php
 $post_id = $_POST["post_id"];
 $post_name = $_POST["post_name"];
 $hiddenpost_id = $_GET["hiddenpost_id"];

  $sql = "UPDATE tbl_postscript SET 
          post_id='$post_id',
          post_name='$post_name'
          WHERE post_id='$hiddenpost_id'
";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/add_post.php");
?>