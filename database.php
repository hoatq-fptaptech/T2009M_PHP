<?php
    function connectDB(){
        // b1 connect db
        $servername = "localhost";
        $username = "root";
        $password = ""; // neu dung mamp thi $password="root" con xampp password="";
        $dbname = "t2009m_php";

        $conn = new mysqli($servername,$username,$password,$dbname); // create connection
    // kiem tra ket noi
        if($conn->connect_error){
            die("connect error..."); // die sẽ làm dừng chương trình tại đây
        }
        return $conn;
    }

    // danh cho select
    function queryDB($sql_txt){
        $conn = connectDB();
        $rs = $conn->query($sql_txt);
        $list = [];
        if($rs->num_rows>0){ // kiem tra xem co du lieu hay ko
            while ($row = $rs->fetch_assoc()){
                $list[] = $row;
            }
        }
        return $list;
    }

    // danh cho insert update delete
    function updateDB($sql_txt){
        $conn = connectDB();
        return $conn->query($sql_txt) === true;
    }
