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
    $post_id = $_GET['post_id'];

    $sql = "SELECT * FROM tbl_postscript WHERE post_id ='$post_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
        
      }   
      ?>
      <a href="../../pages/add_post.php"><button>กลับ</button></a>
    <h1>แก้ไขคำลงท้าย</h1>
        <form action="update_post.php?hiddenpost_id=<?php echo $row["post_id"] ?>" method="post" enctype="multipart/form-data">
            <label for="post_id">รหัสคำลงท้าย :</label>
            <input type="text" name="post_id" value="<?php echo $row["post_id"] ?>"><br><br>
            <label for="post_name">ชื่อคำลงท้าย :</label>
            <input type="text" name="post_name" value="<?php echo $row["post_name"] ?>"><br><br>
            <button type="submit">แก้ไข</button>
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
                    <td><a href='../config/post/edit_postend.php?post_id=<?php echo $row["post_id"];?>'><button>แก้ไข</button></a></td>
                    <td><a href='../config/post/del_postend.php?post_id=<?php echo $row["post_id"];?>'><button>ลบ</button></a></td>
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