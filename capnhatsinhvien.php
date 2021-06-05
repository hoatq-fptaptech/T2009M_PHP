<?php include_once "database.php";?>
<?php
$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$tel = $_POST["tel"]; // lay du lieu tu form post

//    echo "Connect successfully";
$sql_txt = "update sinhviens set name='$name',age=$age, tel='$tel' where id= $id";
if(updateDB($sql_txt)){
    header("Location: list.php");
}else{
    echo "Cap nhat that bai";
}
