<?php
include_once "../base.php";

if(!empty($_POST['acc'])){
    if(strlen($_POST['acc'])>=8){
        $chkacc=chkacc($_POST['acc']);
        if($chkacc==true){

            $acc=$_POST['acc'];
            $pw=md5($_POST['pw']);
            $email=$_POST['email'];
            
            $data=[
                "acc"=>$acc,
                "pw"=>$pw,
                "email"=>$email,
            ];
            
            save('user',$data);
            
            to("../index.php");
        }else{
            echo "帳號不能有特殊符號,只能英數字大小寫";
        }
    }else{
        echo "帳號至少要八碼";
    }
}else{
    echo "帳號不能為空";
}
?>