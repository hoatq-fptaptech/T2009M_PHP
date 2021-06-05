<?php include_once "database.php";?>
<?php
$id = $_GET["id"];
//    echo "Connect successfully";
$sql_txt = "delete from sinhviens where id= $id";
if(updateDB($sql_txt)){
    header("Location: list.php");
}else{
    echo "xoa that bai";
}
