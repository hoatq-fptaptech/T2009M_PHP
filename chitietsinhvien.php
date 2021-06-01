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
    <?php
        $sv = [
            "name"=>"Nguyễn Văn An",
            "age"=>22,
            "tel"=>"0987661"
        ];
    ?>
    <ul>
        <?php foreach ($sv as $key=>$value){?>
            <li><?php echo $key.":".$value;?></li>
       <?php } ?>
    </ul>
</body>
</html>