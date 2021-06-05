<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
    <?php
        // lay sinh vien tu db
        // b1 connect db
        $servername = "localhost";
        $username = "root";
        $password = "root"; // neu dung mamp thi $password="root";
        $dbname = "t2009m_php";

        $conn = new mysqli($servername,$username,$password,$dbname); // create connection
        // kiem tra ket noi
    if($conn->connect_error){
        die("connect error..."); // die sẽ làm dừng chương trình tại đây
    }
//    echo "Connect successfully";
        $sql_txt = "select * from sinhviens";
        $rs = $conn->query($sql_txt);
        $dssinhvien = [];
        if($rs->num_rows>0){ // kiem tra xem co du lieu hay ko
            while ($row = $rs->fetch_assoc()){
                $dssinhvien[] = $row;
            }
        }
    ?>
    <a href="themsinhvien.php">Thêm sinh viên</a>
    <ul>
        <?php foreach ($dssinhvien as $item){ ?>
            <li><a href="chitietsinhvien.php?id=<?php echo $item["id"]; ?>"> <?php echo $item["name"]."--".$item["tel"];?></a>
                <a href="suasinhvien.php?id=<?php echo $item["id"]; ?>">Sửa</a>
                <a href="xoasinhvien.php?id=<?php echo $item["id"]; ?>">Xóa</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
