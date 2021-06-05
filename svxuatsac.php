<?php
include_once "database.php";
session_start();
$id = $_GET["id"];

$sql_txt = "select * from sinhviens where id = $id";
$ds = queryDB($sql_txt);// ds se chi co toi da 1 row
if(count($ds)==0) header("Location: list.php"); // redirect ve list neu ko tim thay sv
$sv = $ds[0];
$dssv_xuatsac = [];
if($_SESSION["sv_xs"]){
    $dssv_xuatsac =  $_SESSION["sv_xs"];
}
$dssv_xuatsac[] = $sv;
$_SESSION["sv_xs"] = $dssv_xuatsac;// nap ds vao session
header("Location: list.php");

