<?php
  
    session_start();
    $user=$_SESSION['username'];
    $address=$_REQUEST['address'];
    $dist=$_REQUEST["dist"];
    $state=$_REQUEST["state"];
    $landmark=$_REQUEST["landmark"];
    $pincode=$_REQUEST["pincode"];
    
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result=pg_query($connect,"select mobileno,name from recipient_signup where userid='".$user."'");
    $row=pg_fetch_row($result);
    $mobileno=$row[0];
    $name=$row[1];
    
    pg_query($connect,"insert into recipient_order values('$name','$user','$mobileno','$address','$dist','$state','$landmark','$pincode')");
    

    
?>
