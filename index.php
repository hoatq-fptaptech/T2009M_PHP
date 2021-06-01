<?php
$x = 10; // number
$y = "hello world"; // string
echo $x; // print
$z = "T2009M";
$z = $z." Hello everybody";
$y = $y.$y;
$y.=$y; // string dung .
$x  = $x +10; // number dung  + - * /
if($x>10){
    echo "x > 10";
}
for($i=0;$i<10;$i++){
    echo "i=".$i;
}
$arr =[];// khai bao 1 array
$arr[0] = 176;
$arr[1] = "hoa huong duong"; // truyen vao theo chi muc (i)
$arr[] = 103;// tu dong them chi muc 2

$arr["name"] = "Nguyen Van An"; // them phan tu kieu truyen theo chi muc string name : Nguyen Van an

foreach ($arr as $item){ // $item tuong duong $arr[i]
    echo $item."<br/>";
}
$human = [];
$human["name"]= "Le Van Nam";
$human["age"] = 19;
$human["tel"]= "0987765432";
foreach ($human as $key=>$item){
    echo $key."=".$item."<br/>";
}