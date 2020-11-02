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
    <h1>เพิ่มคำลงท้าย</h1>
        <form action="../config/postend/insert_post.php" method="post" enctype="multipart/form-data">
            <label for="post_id">รหัสคำลงท้าย :</label>
            <input type="text" name="post_id" placeholder="p000" required=""><br><br>
            <label for="post_name">ชื่อคำลงท้าย :</label>
            <input type="text" name="post_name" placeholder="ขอแสดงความนับถือ" required=""><br><br>
            <button type="submit">เพิ่ม</button>
        </form>
<hr>
<h2>ตารางแสดงประเภทคำลงท้าย</h2>
    <table border=1>
        <thead>
            <tr>
                <th>รหัสคำลงท้าย</th>
                <th>ชื่อคำลงท้าย</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <?php 
    $sql = "SELECT * FROM tbl_postscript";
    $result = mysqli_query($conn, $sql);
    ?>

    <?php if (mysqli_num_rows($result) > 0) { ?>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
            
            <tbody>
                <tr>
                    <td><?php echo $row["post_id"]; ?></td>
                    <td><?php echo $row["post_name"]; ?></td>
                    <td><a href='../config/postend/edit_post.php?post_id=<?php echo $row["post_id"];?>'><button>แก้ไข</button></a></td>
                    <td><a href='../config/postend/del_post.php?post_id=<?php echo $row["post_id"];?>'><button>ลบ</button></a></td>
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