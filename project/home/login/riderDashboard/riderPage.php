<?php
  
    session_start();
    $userid=$_SESSION['username'];
    
    $area=$_REQUEST['area'];
    $dist=$_REQUEST['dist'];
    $state=$_REQUEST['state'];
    $landmark=$_REQUEST['landmark'];
    $pincode=$_REQUEST['pincode'];
    
    $darea=$_REQUEST['darea'];
    $ddist=$_REQUEST['ddist'];
    $dstate=$_REQUEST['dstate'];
    $dlandmark=$_REQUEST['dlandmark'];
    $dpincode=$_REQUEST['dpincode'];

    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    pg_query($connect,"insert into ridedetails values('$userid','$area','$dist','$state','$landmark','$pincode','$darea','$ddist','$dstate','$dlandmark','$dpincode')");
    
?>
