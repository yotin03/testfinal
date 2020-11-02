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
    <h1>เพิ่มประเภทอักษร</h1>
        <form action="../config/num/insert_num.php" method="post" enctype="multipart/form-data">
            <label for="add_id">รหัสอักษร :</label>
            <input type="text" name="add_id" placeholder="n001" required=""><br><br>
            <label for="add_shortname">ชื่ออักษร :</label>
            <input type="text" name="add_shortname" placeholder="นร." required=""><br><br>
            <label for="add_fullname">ชื่อเต็ม :</label>
            <input type="text" name="add_fullname" placeholder="สำนักนายกรัฐมนตรี" required=""><br><br>
            <button type="submit">เพิ่ม</button>
        </form>
<hr>
<h2>ตารางแสดงประเภทอักษร</h2>
    <table border=1>
        <thead>
            <tr>
                <th>รหัสอักษร</th>
                <th>ชื่ออักษร</th>
                <th>ชื่อเต็ม</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <?php 
    $sql = "SELECT * FROM tbl_addnums";
    $result = mysqli_query($conn, $sql);
    ?>

    <?php if (mysqli_num_rows($result) > 0) { ?>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
            
            <tbody>
                <tr>
                    <td><?php echo $row["add_id"]; ?></td>
                    <td><?php echo $row["add_shortname"]; ?></td>
                    <td><?php echo $row["add_fullname"]; ?></td>
                    <td><a href='../config/num/edit_num.php?add_id=<?php echo $row["add_id"];?>'><button>แก้ไข</button></a></td>
                    <td><a href='../config/num/del_num.php?add_id=<?php echo $row["add_id"];?>'><button>ลบ</button></a></td>
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