<?php

 require_once('../vendor/autoload.php');


 $mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 16,
	'default_font' => 'sarabun'
]);


ob_start();

?>


<?php include "../config/config.php"; ?>
<?php 
        $mail_id = $_GET['mail_id'];
        $sql = "SELECT * FROM tbl_mail INNER JOIN tbl_status on tbl_mail.status_id = tbl_status.status_id
            INNER JOIN tbl_addnums on tbl_mail.add_id = tbl_addnums.add_id
            INNER JOIN tbl_postscript on tbl_mail.post_id = tbl_postscript.post_id WHERE tbl_mail.mail_id ='".$mail_id."'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result)
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "../config/title.php"; ?></title>
</head>
<body>
<p></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>
<p><?php echo $row["mail_name"]; ?></p>

</body>
</html>



<?php
$html = ob_get_contents();
ob_end_clean();

// send the captured HTML from the output buffer to the mPDF class for processing
$mpdf->WriteHTML($html);
$mpdf->Output();


?>