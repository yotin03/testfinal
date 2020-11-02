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
    $add_id = $_GET['add_id'];

    $sql = "SELECT * FROM tbl_addnums WHERE add_id ='$add_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
        
      }   
      ?>
<a href="../../pages/add_num.php"><button>กลับ</button></a>
    <h1>แก้ไขประเภทอักษร</h1>
        <form action="update_num.php?hiddenadd_id=<?php echo $row["add_id"] ?>" method="post" enctype="multipart/form-data">
            <label for="add_id">รหัสอักษร :</label>
            <input type="text" name="add_id" value="<?php echo $row["add_id"] ?>"><br><br>
            <label for="add_shortname">ชื่ออักษร :</label>
            <input type="text" name="add_shortname" value="<?php echo $row["add_shortname"] ?>"><br><br>
            <label for="add_fullname">ชื่อเต็ม :</label>
            <input type="text" name="add_fullname" value="<?php echo $row["add_fullname"] ?>"><br><br>
            <button type="submit">แก้ไข</button>
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
                    <td><a href='../num/edit_num.php?add_id=<?php echo $row["add_id"];?>'><button>แก้ไข</button></a></td>
                    <td><a href='../num/del_num.php?add_id=<?php echo $row["add_id"];?>'><button>ลบ</button></a></td>
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