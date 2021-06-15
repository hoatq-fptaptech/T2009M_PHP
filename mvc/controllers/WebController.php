<?php
//include_once "../database.php";
include_once "models/SinhVien.php";
class WebController{
    public function home(){
        // tra ve giao dien trang chu
    }
    public function login(){
        // tra ve giao dien login
        require_once "views/login.php";
    }

    public function listSV(){
//        $sql_txt = "select * from sinhviens";
//        $dssinhvien = queryDB($sql_txt);
        $sv = new SinhVien();
        $dssinhvien = $sv->all();
        include "views/list.php";
    }

    public function themSV(){
        require_once "views/themSV.php";
    }

    public function luuSV(){
        $sv = new SinhVien();
        $sv->save($_POST);
        header("Location: ?route=list");
    }

    public function chitietSV(){
        $sv = new SinhVien();
        $sinhvien = $sv->find($_GET["id"]);
    }
}