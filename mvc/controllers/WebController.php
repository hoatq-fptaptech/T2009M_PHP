<?php
include_once "../database.php";
class WebController{
    public function home(){
        // tra ve giao dien trang chu
    }
    public function login(){
        // tra ve giao dien login
        require_once "views/login.php";
    }

    public function listSV(){
        $sql_txt = "select * from sinhviens";
        $dssinhvien = queryDB($sql_txt);
        include "views/list.php";
    }

    public function themSV(){
        require_once "views/themSV.php";
    }

    public function luuSV(){
        $name = $_POST["name"];
        $age = $_POST["age"];
        $tel = $_POST["tel"];
        $sql_txt = "insert into sinhviens (name,age,tel) values ('$name',$age,'$tel')";
        updateDB($sql_txt);
        header("Location: ?route=list");
    }
}