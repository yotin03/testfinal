<?php include "../config.php"; ?>
<?php 
    $mail_id = $_POST["mail_id"];
    $years = $_POST["years"];
    $mail_name = $_POST["mail_name"];
    $mail_sander = $_POST["mail_sander"];
    $mail_date = $_POST["mail_date"];
    $mail_des = $_POST["mail_des"];
    $mail_sign = $_POST["mail_sign"];
    $status_id = $_POST["status_id"];
    $add_id = $_POST["add_id"];
    $post_id = $_POST["post_id"];
    $hiddenmail_id = $_GET["hiddenmail_id"];
 
 

    $sql = "UPDATE tbl_mail SET 
            mail_id='$mail_id', 
            years='$years',
            mail_name='$mail_name',
            mail_sander='$mail_sander',
            mail_date='$mail_date',
            mail_des='$mail_des',
            mail_sign='$mail_sign',
            status_id='$status_id',
            add_id='$add_id',
            post_id='$post_id'";  


 if($_FILES["mail_files"]['size'] <> null)
 {
    $mail_files  = $_FILES['mail_files']['name'];
    $target = "../../files/".basename($mail_files);
    move_uploaded_file($_FILES['mail_files']['tmp_name'],$target);
    $sql = $sql.",`mail_files`='$mail_files'";
}
else
{
  $mail_files  = "";
}

$sql = $sql." WHERE mail_id='$hiddenmail_id'";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: ../../pages/showlistmail.php");
?>