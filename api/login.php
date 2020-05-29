<?php
include_once "../base.php";
    
    $acc=$_POST['acc'];
    $pw=md5($_POST['pw']);
    // md5為早期在使用的加密方法，現在已hash為較近期的使用方式
    // hash('md5',$_POST['pw']);

    $chk=nums('user',['acc'=>$acc,'pw'=>$pw]);

    if($chk>=1){
        to("../home.php");
    }else{
        to("../fail.php");
    }

?>