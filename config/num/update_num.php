<?php include "../config.php"; ?> <!--เรียกใช้ไฟล์ติดต่อฐานข้อมูล-->
<?php
 $add_id = $_POST["add_id"];
 $add_shortname = $_POST["add_shortname"];
 $add_fullname = $_POST["add_fullname"];
 $hiddenadd_id = $_GET["hiddenadd_id"];

  $sql = "UPDATE tbl_addnums SET 
          add_id='$add_id',
          add_shortname='$add_shortname',
          add_fullname='$add_fullname'
          WHERE add_id='$hiddenadd_id'
";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/add_num.php");
?>