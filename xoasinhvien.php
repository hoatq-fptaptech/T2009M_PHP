<?php
$id = $_GET["id"];

// b1 connect db
$servername = "localhost";
$username = "root";
$password = "root"; // neu dung mamp thi $password="root" con xampp password="";
$dbname = "t2009m_php";

$conn = new mysqli($servername,$username,$password,$dbname); // create connection
// kiem tra ket noi
if($conn->connect_error){
    die("connect error..."); // die sẽ làm dừng chương trình tại đây
}
//    echo "Connect successfully";
$sql_txt = "delete from sinhviens where id= $id";
if($conn->query($sql_txt) === true){
    header("Location: list.php");
}else{
    echo "xoa that bai";
}
