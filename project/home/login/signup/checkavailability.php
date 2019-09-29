<?php
    
    $usr=$_REQUEST['u1'];
   // $usr="amaru05";
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result=pg_query($connect,"select * from registration");
    
    $flag=0;
    while(($row=pg_fetch_row($result))){
        
        if($row[1]==$usr){
            
            $flag=1;
            break;
        }
    }
    
    if($flag==1){
        
        echo"Valid";
        //ob_start();
        //header("Location:user.html");
        
    }else{
        
        echo"Invalid";
        //header("Location:invalid.html");
        
        
    }
    
    ?>

