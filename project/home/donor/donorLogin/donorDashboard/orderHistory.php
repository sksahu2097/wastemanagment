<?php
  
    session_start();
    $userid=$_SESSION['username'];
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    $result=pg_query($connect,"select * from donationorder where userid='".$userid."'");
    
    echo"<table border=2 width=500 height=300>";
    
    echo"<tr>";
    echo"<th>";
    echo"food categories";
    echo"</th>";
    echo"<th>";
    echo"Quantity";
    echo"</th>";
    echo"<th>";
    echo"food Expiry";
    echo"</th>";
    echo"<th>";
    echo"food Type";
    echo"</th>";
    echo"</tr>";

    while(($row=pg_fetch_row($result))){

        echo"<tr>";
        echo"<td>";
        echo"".$row[1];
        echo"</td>";
        echo"<td>";
        echo"".$row[2];
        echo"</td>";
        echo"<td>";
        echo"".$row[3];
        echo"</td>";
        echo"<td>";
        echo"".$row[4];
        echo"</td>";
        echo"</tr>";
        
    }
    

    echo"</table>";
?>
