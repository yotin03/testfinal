<?php include "../config.php"; ?>
<?php 
 $status_id = $_POST["status_id"];
 $add_id = $_POST["add_id"];
 $mail_id = $_POST["mail_id"];
 $mail_name = $_POST["mail_name"];
 $mail_sander = $_POST["mail_sander"];
 $mail_date = $_POST["mail_date"];
 $mail_des = $_POST["mail_des"];
 $post_id = $_POST["post_id"];
 $mail_sign = $_POST["mail_sign"];
 $mail_files = $_FILES["mail_files"]["name"];
 $years = $_POST["years"];
 
 if($_FILES["mail_files"] <> null){
    $sql = "INSERT INTO tbl_mail (mail_id , years ,mail_name ,mail_sander ,mail_date ,mail_des ,mail_sign ,mail_files ,status_id ,add_id ,post_id)
    VALUES ('$mail_id', '$years','$mail_name','$mail_sander','$mail_date','$mail_des','$mail_sign','$mail_files','$status_id','$add_id','$post_id')";  
 
    $target = "../../files/".basename($mail_files);
    move_uploaded_file($_FILES["mail_files"]["tmp_name"],$target);
}
else{

    $sql = "INSERT INTO tbl_mail (mail_id, years ,mail_name ,mail_sander ,mail_date ,mail_des ,mail_sign ,status_id ,add_id ,post_id)
    VALUES ('$mail_id', '$years','$mail_name','$mail_sander','$mail_date','$mail_des','$mail_sign','$status_id','$add_id','$post_id')";  
}


 

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/showlistmail.php");
?>