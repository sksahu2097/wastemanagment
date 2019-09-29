 <?php
    
    $name=$_REQUEST['name'];
    $usr=$_REQUEST['usr'];
    $mno=$_REQUEST['mno'];
    $addr=$_REQUEST['addr'];
    $pwd=$_REQUEST['pwd'];
    $dist=$_REQUEST['dist'];
    $st=$_REQUEST['st'];
    $land=$_REQUEST['land'];
    $pin=$_REQUEST['pin'];
   
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    pg_query($connect,"insert into recipient_signup values('$name','$usr','$mno','$addr','$dist','$st','$land','$pin')");
    pg_query($connect,"insert into recipient_login values('$usr','$pwd')");
        
    ?>


