 <?php
    
    $name=$_REQUEST['name'];
    $usr=$_REQUEST['usr'];
    $mno=$_REQUEST['mno'];
    $addr=$_REQUEST['addr'];
    $role=$_REQUEST['role'];
    $pwd=$_REQUEST['pwd'];
    $dist=$_REQUEST['dist'];
    $st=$_REQUEST['st'];
    $land=$_REQUEST['land'];
    $pin=$_REQUEST['pin'];
   
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    pg_query($connect,"insert into donor_registration values('$name','$usr','$mno','$addr','$dist','$st','$land','$pin','$role')");
    pg_query($connect,"insert into donationlogin values('$usr','$pwd')");
        
    ?>


