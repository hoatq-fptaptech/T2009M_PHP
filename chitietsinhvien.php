<?php include_once "database.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết thông tin sinh viên</title>
</head>
<body>
    <a href="list.php"><< Trở lại</a>
    <?php
       // phải lấy được id của sinh viên từ URL
        $id = $_GET["id"];
        // truy van sinh vien theo id

        $sql_txt = "select * from sinhviens where id = $id";
        $ds = queryDB($sql_txt);// ds se chi co toi da 1 row
        if(count($ds)==0) header("Location: list.php"); // redirect ve list neu ko tim thay sv
        $sv = $ds[0];
    ?>
    <h1><?php echo $_COOKIE["title"];?></h1>
    <ul>
        <?php foreach ($sv as $key=>$value){?>
            <li><?php echo $key.":".$value;?></li>
       <?php } ?>
    </ul>
</body>
</html>
