<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa sinh viên</title>
</head>
<body>
<?php
    // lay chi tiet sinh vien theo id
    $id = $_GET["id"];
    // truy van sinh vien theo id
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
<form action="capnhatsinhvien.php" method="post">
    <input name="id"  value="<?php echo $sv["id"];?>" type="hidden"/>
    <input name="name" type="text" placeholder="Name" value="<?php echo $sv["name"];?>"/>
    <input name="age" type="number" placeholder="Age" value="<?php echo $sv["age"];?>"/>
    <input name="tel" type="tel" placeholder="Telephone"  value="<?php echo $sv["tel"];?>"/>
    <button type="submit">Submit</button>
</form>
</body>
</html>
