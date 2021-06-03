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
        // b1 connect db
        $servername = "localhost";
        $username = "root";
        $password = ""; // neu dung mamp thi $password="root";
        $dbname = "t2009m_php";

        $conn = new mysqli($servername,$username,$password,$dbname); // create connection
        // kiem tra ket noi
        if($conn->connect_error){
            die("connect error..."); // die sẽ làm dừng chương trình tại đây
        }
        //    echo "Connect successfully";
        $sql_txt = "select * from sinhviens where id = $id";
        $rs = $conn->query($sql_txt);
        $sv = null;
        if($rs->num_rows>0){ // kiem tra xem co du lieu hay ko
            while ($row = $rs->fetch_assoc()){
                $sv = $row;
            }
        }
        if($sv == null) header("Location: list.php"); // redirect ve list neu ko tim thay sv
    ?>
    <ul>
        <?php foreach ($sv as $key=>$value){?>
            <li><?php echo $key.":".$value;?></li>
       <?php } ?>
    </ul>
</body>
</html>