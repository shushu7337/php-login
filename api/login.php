<?php
include_once "../base.php";
    $acc=$_POST['acc'];
    $pw=md5($_POST['pw']);
        //hash('md5',$_POST['pw']);
    $chk=nums('user',['acc'=>$acc,'pw'=>$pw]);

    if($chk>=1){
        $_SESSION['user']=$acc;
        to("../home.php");
    }else{
        to("../fail.php");
    }



?>