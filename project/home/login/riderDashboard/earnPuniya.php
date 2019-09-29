<?php

    session_start();
    $userid=$_SESSION['username'];
    //$userid="sksahu20";
    
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result=pg_query($connect,"select * from ridedetails where userid='".$userid."'");
    
    if(pg_num_rows($result) > 0){
        
        $row=pg_fetch_row($result);
        $land=$row[4];
        $pin=$row[5];
        $dland=$row[9];
        $dpin=$row[10];
        $result1=pg_query($connect,"select * from donationorder");
        
        if(pg_num_rows($result1) > 0){

            while($row1=pg_fetch_row($result1)){
            
                $s=$row1[0];
                $result2=pg_query($connect,"select * from donor_registration where userid='".$s."'");
                $row2=pg_fetch_row($result2);
                $result3=pg_query($connect,"select * from recipient_order");
                
                if(pg_num_rows($result3) > 0){
                
                    while($row3=pg_fetch_row($result3)){
                
                        $donland=$row2[6];
                        $donpin=$row2[7];
                        
                        $rland=$row3[6];
                        $rpin=$row3[7];
                
                        if($land==$donland && $pin==$donpin && $rland==$dland && $rpin==$dpin){
                            
                            echo"<table border=2>";
                            
                            echo"<tr>";
                            echo"<td>";
                            echo"donor name";
                            echo"</td>";
                            echo"<td>";
                            echo"".$row2[0];
                            echo"</td>";
                            echo"</tr>";
                            
                            echo"<tr>";
                            echo"<td>";
                            echo"donor mobile no";
                            echo"</td>";
                            echo"<td>";
                            echo"".$row2[2];
                            echo"</td>";
                            echo"</tr>";
                            
                            echo"<tr>";
                            echo"<td>";
                            echo"donor landmark";
                            echo"</td>";
                            echo"<td>";
                            echo"".$row2[6];
                            echo"</td>";
                            echo"</tr>";
                            
                            echo"<tr>";
                            echo"<td>";
                            echo"recipient name";
                            echo"</td>";
                            echo"<td>";
                            echo"".$row3[0];
                            echo"</td>";
                            echo"</tr>";
                            
                            echo"<tr>";
                            echo"<td>";
                            echo"recipient mobile no";
                            echo"</td>";
                            echo"<td>";
                            echo"".$row3[2];
                            echo"</td>";
                            echo"</tr>";
                            
                            echo"<tr>";
                            echo"<td>";
                            echo"recipient landmark";
                            echo"</td>";
                            echo"<td>";
                            echo"".$row3[6];
                            echo"</td>";
                            echo"</tr>";
                            
                            echo"</table>";
                            
                        }
                        
                    }
            
                }else{
                    
                    echo"<font size=20 face='Times New Roman'><b>no Reciver order Raised</b></font>";
                    
                }
            }
            
        }else{
            
            echo"<font size=20 face='Times New Roman'><b>no order Raised</b></font>";
            
        }
            
    }else{
        
        echo"<font size=20 face='Times New Roman'><b>First Enter Ride Details</b></font>";
        
    }
    
?>
