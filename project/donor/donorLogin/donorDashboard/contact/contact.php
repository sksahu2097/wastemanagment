<?php

    $name=$_REQUEST['user'];
    $email=$_REQUEST['email'];
    $msg=$_REQUEST['msg'];
    
    $fname=explode("@",$email);
    
    $fp=fopen("feedback/".$fname[0].".txt","a");
    
    if($fp == false){
        
        echo"ERROR 400 RESOURCE NOT FOUND";
        
        
    }else{
        
        fwrite($fp,"name=".$name."\n");
        fwrite($fp,"User Email id=".$email."\n");
        fwrite($fp,"Mesage = \n".$msg."\n");
        
    }
    header('Location: http://localhost:8000/home/contact/contact.html');


    
?>
