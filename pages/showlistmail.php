<?php include "../config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "../config/title.php"; ?></title>
</head>
<body>
<?php include "../config/menu.php"; ?>
<h2>ตารางแสดงจดหมาย</h2>
    <table border=1>
        <thead>
            <tr>
                <th>ลำดับที่</th>
                <th>เลขที่จดหมาย</th>
                <th>เรื่อง</th>
                <th>ถึง</th>
                <th>วันที่</th>
                <th>ไฟล์ที่แนบมา</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <?php 
    $sql = "SELECT * FROM tbl_mail INNER JOIN tbl_status on tbl_mail.status_id = tbl_status.status_id
            INNER JOIN tbl_addnums on tbl_mail.add_id = tbl_addnums.add_id
            INNER JOIN tbl_postscript on tbl_mail.post_id = tbl_postscript.post_id";
    $result = mysqli_query($conn, $sql);
    ?>

    <?php if (mysqli_num_rows($result) > 0) { ?>
    <?php $number = 1;  ?>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        
            <tbody>
                <tr>
                    <td><center><?php echo $number; ?></center></td>
                    <td><?php echo $row["add_shortname"].$row["mail_id"]."/".$row["years"]; ?></td>
                    <td><?php echo $row["mail_name"]; ?></td>
                    <td><?php echo $row["mail_sander"]; ?></td>
                    <td><?php echo date('d/m/Y',strtotime($row["mail_date"])); ?></td>
                    <td><a href="../files/<?php echo $row["mail_files"]; ?>"><?php echo $row["mail_files"]; ?></a></td>
                    <td><a href='../config/mail/edit_mail.php?mail_id=<?php echo $row["mail_id"];?>'><button>แก้ไข</button></a></td>
                    <td><a href='../config/mail/del_mail.php?mail_id=<?php echo $row["mail_id"];?>'><button>ลบ</button></a></td>
                </tr>
            </tbody>
            <?php $number++;?>
        <?php } ?>
    <?php } 
    else {
        echo "0 results";
      }
    ?>
</table>
    </table>
</body>
</html>