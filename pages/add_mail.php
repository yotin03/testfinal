<?php include "../config/config.php"; ?>
<?php
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
<?php include "../config/menu.php"; ?>
    <h1>ระบบจดหมาย</h1>
    <hr>
    <form action="../config/mail/insert_mail.php" method="post" enctype="multipart/form-data">
        <label for="status_id">สถานะจดหมาย : </label>
        <select name="status_id"required>
        <option value="">เลือก</option>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo $row["status_id"]; ?>"><?php echo $row["status_name"]; ?></option>
        <?php } ?>
        </select><br><br>

        <label for="add_id">จดหมายออกเลขที่ : </label>
        <select name="add_id" required>
        <option value="">เลือก</option>
        <?php while($row2 = mysqli_fetch_assoc($result2)) { ?>
        <option value="<?php echo $row2["add_id"]; ?>"><?php echo $row2["add_shortname"]; ?></option>
        <?php } ?>
        </select>
        <input type="text" name="mail_id" required><span> / </span><input type="text" name="years" value="2563"><br><br>
        <label for="mail_name">เรื่อง : </label>
        <input type="text" name="mail_name"required> <br><br>
        <label for="mail_sander">เรียน : </label>
        <input type="text" name="mail_sander"required> <br><br>    
        <label for="mail_date">วันที่ : </label>
        <input type="date" name="mail_date"required> <br><br> 
        <label for="mail_des">รายละเอียด : </label><br>
        <textarea name="mail_des" cols="100" rows="20"required></textarea><br><br> 
        <label for="post_id">คำลงท้าย : </label><br>
        <select name="post_id"required>
        <option value="">เลือก</option>
        <?php while($row3 = mysqli_fetch_assoc($result3)) { ?>
        <option value="<?php echo $row3["post_id"]; ?>"><?php echo $row3["post_name"]; ?></option>
        <?php } ?>
        </select><br><br>
        <label for="mail_sign">ลงชื่อ : </label><br>
        <input type="text" name="mail_sign"required><br><br>
        <label for="mail_files">แนบไฟล์ jpg/png/docx/xlsx/pdf : </label><br>
        <input type="file" name="mail_files">
        <button type="submit">บันทึกข้อมูล</button>
        <hr>
    </form>
</body>
</html>