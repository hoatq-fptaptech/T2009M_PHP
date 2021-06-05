<?php include_once "database.php";?>
<?php
 $name = $_POST["name"];
 $age = $_POST["age"];
 $tel = $_POST["tel"]; // lay du lieu tu form post

//    echo "Connect successfully";
$sql_txt = "insert into sinhviens (name,age,tel) values ('$name',$age,'$tel')";
if(updateDB($sql_txt)){
    header("Location: list.php");
}else{
    echo "Them that bai";
}
