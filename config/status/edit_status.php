<?php include "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "../title.php"; ?></title>
</head>
<body>
<?php 
    $status_id = $_GET['status_id'];

    $sql = "SELECT * FROM tbl_status WHERE status_id ='$status_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
        
      }   
      ?>
      <a href="../../pages/add_status.php"><button>กลับ</button></a>
    <h1>แก้ไขสถานะจดหมาย</h1>
        <form action="update_status.php?hiddenstatus_id=<?php echo $row["status_id"] ?>" method="post" enctype="multipart/form-data">
            <label for="status_id">รหัสสถานะจดหมาย :</label>
            <input type="text" name="status_id" value="<?php echo $row["status_id"] ?>"><br><br>
            <label for="status_name">ชื่อสถานะจดหมาย :</label>
            <input type="text" name="status_name" value="<?php echo $row["status_name"] ?>"><br><br>
            <button type="submit">แก้ไข</button>
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