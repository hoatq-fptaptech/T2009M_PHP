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
    <?php // o day viet code php
       $list = [];
       $list[] = [
           "name"=>"Nguyen Van An",
           "age"=>19,
           "tel"=>"0987654321"
       ];
        $list[] = [
            "name"=>"Nguyen Van Dung",
            "age"=>22,
            "tel"=>"0123456789"
        ];
   // khi khong viet code php nua dong lai de viet html
     ?>
    <h1>Danh sách sinh viên:</h1>
    <ul>
        <?php foreach ($list as $item){ ?>
            <li><a href="chitietsinhvien.php"> <?php echo $item["name"]."-".$item["tel"];?></a></li>
       <?php }?>
    </ul>
</body>
</html>