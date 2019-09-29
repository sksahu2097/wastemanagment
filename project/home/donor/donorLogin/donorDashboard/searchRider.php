<?php
    
    session_start();
    $userid=$_SESSION['username'];
    //$userid='amaru05';
    //echo$userid;
    
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result3=pg_query($connect,"select * from donationorder where userid='".$userid."'");
    
    if(pg_num_rows($result3) > 0){
    
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result=pg_query($connect,"select * from donor_registration where userid='".$userid."'");
    
    $row=pg_fetch_row($result);
    
    $dist=$row[4];
    $state=$row[5];
    $landmark=$row[6];
    $pincode=$row[7];
        
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result1=pg_query($connect,"select * from ridedetails where landmark='".$landmark."'");
    
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result=pg_query($connect,"select * from recipent_registration ");
        
    
    while(($row1=pg_fetch_row($result1))){
        
        while(($row=pg_fetch_row($result))){
            
            $dlandmark=$row[5];
            $dpincode=$row[6];
            
            $drlandmark=$row1[9];
            $drpincode=$row1[10];
            
            $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
            $result2=pg_query($connect,"select * from ridedetails where landmark='".$landmark."' and dlandmark='".$drlandmark."' and dpincode='".$drpincode."'");
            
            if(pg_num_rows($result2) > 0){
            
               
                
                while(($row5=pg_fetch_row($result2))){
                $connect1=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
                $result4=pg_query($connect1,"select * from registration where userid='".$row5[0]."'");
                $row2=pg_fetch_row($result4);
                
                echo"<table border=2>";
                
                echo"<tr>";
                echo"<td>";
                echo"name";
                echo"</td>";
                echo"<td>";
                echo"".$row2[0];
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
                
            
            }
            }
            
            
        }
        
    }
    
            
    }else{
        
        echo"<font size=20 face='Times New Roman'><b>no order Raised</b></font>";
        
    }
    
    //echo"<input type="button" value="request" />";
    //echo"".$row1[0];
    
    ?>

