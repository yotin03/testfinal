<?php include "../config.php"; ?>
<?php
    $mail_id = $_GET['mail_id'];
    $sql = "SELECT * FROM tbl_status";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php if (mysqli_num_rows($result) > 0) {} ?>

<?php
    $sql2 = "SELECT * FROM tbl_addnums";
    $result2 = mysqli_query($conn, $sql2);
    ?>
    <?php if (mysqli_num_rows($result2) > 0) {} ?>

<?php
    $sql3 = "SELECT * FROM tbl_postscript";
    $result3 = mysqli_query($conn, $sql3);
    ?>
    <?php if (mysqli_num_rows($result3) > 0) {} ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
    $sql4 = "SELECT * FROM tbl_mail WHERE mail_id='$mail_id'";
    $result4 = mysqli_query($conn, $sql4);
    if (mysqli_num_rows($result4) > 0) {
        // output data of each row
        $row4 = mysqli_fetch_assoc($result4);
      }
      
      ?>
    <h1>แก้ไขจดหมาย</h1>
    <hr>
    <form action="update_mail.php?hiddenmail_id=<?php echo $row4["mail_id"];?>" method="post" enctype="multipart/form-data">
        <label for="status_id">สถานะจดหมาย : </label>
        <select name="status_id">
        <option value="">เลือก</option>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo $row["status_id"]; ?>"<?php if($row4['status_id']==$row['status_id']) { echo "selected";}?>><?php echo $row["status_name"]; ?></option>
        <?php } ?>
        </select><br><br>

        <label for="add_id">จดหมายออกเลขที่ : </label>
        <select name="add_id">
        <option value="">เลือก</option>
        <?php while($row2 = mysqli_fetch_assoc($result2)) { ?>
        <option value="<?php echo $row2["add_id"]; ?>"<?php if($row4['add_id']==$row2['add_id']) { echo "selected";}?>><?php echo $row2["add_shortname"]; ?></option>
        <?php } ?>
        </select>

        <input type="text" name="mail_id" value="<?php echo $row4["mail_id"];?>"><span> / </span><input type="text" name="years" value="<?php echo $row4["years"];?>"><br><br>

        <label for="mail_name">เรื่อง : </label>
        <input type="text" name="mail_name"value="<?php echo $row4["mail_name"];?>"> <br><br>

        <label for="mail_sander">เรียน : </label>
        <input type="text" name="mail_sander" value="<?php echo $row4["mail_sander"];?>"> <br><br> 

        <label for="mail_date">วันที่ : </label>
        <input type="date" name="mail_date" value="<?php echo $row4["mail_date"];?>"> <br><br> 

        <label for="mail_des">รายละเอียด : </label><br>
        <textarea name="mail_des" cols="100" rows="20"><?php echo $row4["mail_des"];?></textarea><br><br> 

        <label for="post_id">คำลงท้าย : </label><br>
        <select name="post_id">
        <option value="">เลือก</option>
        <?php while($row3 = mysqli_fetch_assoc($result3)) { ?>
        <option value="<?php echo $row3["post_id"]; ?>"<?php if($row4['post_id']==$row3['post_id']) { echo "selected";}?>><?php echo $row3["post_name"]; ?></option>
        <?php } ?>
        </select><br><br>

        <label for="mail_sign">ลงชื่อ : </label><br>
        <input type="text" name="mail_sign"value="<?php echo $row4["mail_sign"];?>"><br><br>

        <label for="mail_files">แนบไฟล์ jpg/png/docx/xlsx/pdf : </label><br>
        <p>ไฟล์เดิม : <a href="../../files/<?php echo $row4["mail_files"];?>"><?php echo $row4["mail_files"];?></a></p>
        <input type="file" name="mail_files">
        
        <button type="submit">แก้ไข้ข้อมูล</button>
        <hr>
    </form>
</body>
</html>