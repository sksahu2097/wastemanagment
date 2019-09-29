<?php
  
    session_start();
   $userid=$_SESSION['username'];
    //$userid='amaru05';
    //echo$userid;
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result=pg_query($connect,"select * from customerdetails where userid='".$userid."'");
    
    $row=pg_fetch_row($result);
    
    $area=$row[1];
    //echo$area;
    $dist=$row[2];
    $state=$row[3];
    $landmark=$row[4];
    $pincode=$row[5];
    
    $darea=$row[6];
    $ddist=$row[7];
    $dstate=$row[8];
    $dlandmark=$row[9];
    $dpincode=$row[10];
    
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result1=pg_query($connect,"select * from ridedetails where area='".$area."' and darea='".$darea."'");
    
    $row1=pg_fetch_row($result1);
    
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result2=pg_query($connect,"select * from registration where userid='".$row1[0]."'");
    $row2=pg_fetch_row($result2);

    if(pg_num_rows($result1) > 0){
    
    echo"<table border=2>";
    
    echo"<tr>";
    echo"<td>";
    echo"user id";
    echo"</td>";
    echo"<td>";
    echo"".$row1[0];
    echo"</td>";
    echo"</tr>";
    
    echo"<tr>";
    echo"<td>";
    echo"mobile no";
    echo"</td>";
    echo"<td>";
    echo"".$row2[2];
    echo"</td>";
    echo"</tr>";
    
    echo"<tr>";
    echo"<td>";
    echo"vehicle no";
    echo"</td>";
    echo"<td>";
    echo"".$row2[5];
    echo"</td>";
    echo"</tr>";
    
    echo"<tr>";
    echo"<td>";
    echo"starting point";
    echo"</td>";
    echo"<td>";
    echo"".$row1[4];
    echo"</td>";
    echo"</tr>";
    
    echo"<tr>";
    echo"<td>";
    echo"ending point";
    echo"</td>";
    echo"<td>";
    echo"".$row1[9];
    echo"</td>";
    echo"</tr>";
    
    echo"</table>";
        
    }else{
        
        echo"<font size=20 face='Times New Roman'><b>no rider found</b></font>";
        
    }
    
    //echo"<input type="button" value="request" />";
    //echo"".$row1[0];
    
?>
