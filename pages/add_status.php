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
    <h1>เพิ่มสถานะจดหมาย</h1>
        <form action="../config/status/insert_status.php" method="post" enctype="multipart/form-data">
            <label for="status_id">รหัสสถานะจดหมาย :</label>
            <input type="text" name="status_id" placeholder="s000" required=""><br><br>
            <label for="status_name">ชื่อสถานะจดหมาย :</label>
            <input type="text" name="status_name" placeholder="ธรรมดา" required=""><br><br>
            <button type="submit">เพิ่ม</button>
        </form>
<hr>
<h2>ตารางแสดงประเภทสถานะจดหมาย</h2>
    <table border=1>
        <thead>
            <tr>
                <th>รหัสสถานะจดหมาย</th>
                <th>ชื่อสถานะจดหมาย</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <?php 
    $sql = "SELECT * FROM tbl_status";
    $result = mysqli_query($conn, $sql);
    ?>

    <?php if (mysqli_num_rows($result) > 0) { ?>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
            
            <tbody>
                <tr>
                    <td><?php echo $row["status_id"]; ?></td>
                    <td><?php echo $row["status_name"]; ?></td>
                    <td><a href='../config/status/edit_status.php?status_id=<?php echo $row["status_id"];?>'><button>แก้ไข</button></a></td>
                    <td><a href='../config/status/del_status.php?status_id=<?php echo $row["status_id"];?>'><button>ลบ</button></a></td>
                </tr>
            </tbody>
    
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