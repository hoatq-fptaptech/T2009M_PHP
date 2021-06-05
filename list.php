<?php include_once "database.php";?>
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
        setcookie("title","Xin chao T2009M",time()+3600,"/t2009m_php");// set vào key là title 1 giá trị string , thời gian là 36000

        $sql_txt = "select * from sinhviens";
        $dssinhvien = queryDB($sql_txt);
    ?>
    <a href="themsinhvien.php">Thêm sinh viên</a>
    <a href="danhsachxuatsac.php">SV xuất sắc</a>
    <ul>
        <?php foreach ($dssinhvien as $item){ ?>
            <li><a href="chitietsinhvien.php?id=<?php echo $item["id"]; ?>"> <?php echo $item["name"]."--".$item["tel"];?></a>
                <a href="suasinhvien.php?id=<?php echo $item["id"]; ?>">Sửa</a>
                <a href="xoasinhvien.php?id=<?php echo $item["id"]; ?>">Xóa</a>
                <a href="svxuatsac.php?id=<?php echo $item["id"]; ?>">SV xuất sắc</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
