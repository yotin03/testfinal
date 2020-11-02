<?php include "../config.php"; ?> <!--เรียกใช้ไฟล์ติดต่อฐานข้อมูล-->
<?php
 $status_id = $_POST["status_id"];
 $status_name = $_POST["status_name"];
 $hiddenstatus_id = $_GET["hiddenstatus_id"];

  $sql = "UPDATE tbl_status SET 
          status_id='$status_id',
          status_name='$status_name'
          WHERE status_id='$hiddenstatus_id'
";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/add_status.php");
?>