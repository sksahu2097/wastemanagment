 <?php
    
    $name=$_REQUEST['name'];
    $usr=$_REQUEST['usr'];
    $mno=$_REQUEST['mno'];
    $addr=$_REQUEST['addr'];
    $role=$_REQUEST['role'];
    $pwd=$_REQUEST['pwd'];
    $vno=$_REQUEST['vno'];
    $lno=$_REQUEST['lno'];
   
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
     
     if($role=="rider"){
    
         pg_query($connect,"insert into registration values('$name','$usr','$mno','$addr','$role','$vno','$lno')");
         
     }else{
     
        pg_query($connect,"insert into registration values('$name','$usr','$mno','$addr','$role','na','na')");
    
     }
    pg_query($connect,"insert into logindetails values('$usr','$pwd','role')");
        
    ?>


