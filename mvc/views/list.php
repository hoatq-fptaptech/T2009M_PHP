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
<a href="?route=themsv">Thêm sinh viên</a>
<a href="#">SV xuất sắc</a>
<ul>
    <?php foreach ($dssinhvien as $item){ ?>
        <li><a href="#"> <?php echo $item["name"]."--".$item["tel"];?></a>
            <a href="#">Sửa</a>
            <a href="#">Xóa</a>
            <a href="#">SV xuất sắc</a>
        </li>
    <?php } ?>
</ul>
</body>
</html>
