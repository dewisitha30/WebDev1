<?php
    require_once "config/koneksi.php";

    session_start();
    if(!isset($_SESSION['email'])){
        include_once "module/login/login.php";
    }
    else{
        $module = null;
        $act = null;
        $id = null;
        if(isset($_GET['module'])){
            $module = $_GET['module'];
        }
        if(isset($_GET['act'])){
            $act = $_GET['act'];
        }
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }

        if($module == "users"){
            if($act == "create"){
                include_once "module/users/createuser.php";
            }
            elseif($act=="show"){ 
                include_once "module/users/showuser.php";
            }
            elseif($act=='edit'){
                include_once "module/users/edituser.php";
            }
            elseif($act=='delete'){
                include_once "module/users/deleteuser.php";
            }
            else{
                include_once "module/users/indexuser.php";
            }
        }elseif($module=="rekap"){
            echo"module Rekapan";

        }elseif($module=="home"){
            echo"module dasboard";
            
        }elseif($module=="langgar"){
            echo"module Pelanggaran";
        }else{
            include_once "module/home/index.php";
        }

        
    }
?>