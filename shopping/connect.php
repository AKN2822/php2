<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="shopping_cart";

    $con=mysqli_connect($host,$user,$password,$db);
    $con->query("SET NAMES UTF8");

    function date_th($ddd){
        $day_th = date('d',strtotime($ddd));
        $month = array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
        $month_th = $month[date('n',strtotime($ddd))];
        $year_th = date('Y',strtotime($ddd))+543;
        $date_th = $day_th." ".$month_th." ".$year_th;
        return $date_th;
        }
?>