<?php
  
    $svalues=explode(",",$_REQUEST['svalues']);
    $values=explode(",",$_REQUEST['values']);
    
    $connect=pg_connect("host=localhost user=postgres dbname=nccproject password=santoshsahu");
    
    for($i=0;$i<count($values);){
       
       $j=$i;
       while($j<$i+1){
           
            $z=$j;
            $e=$j+1;
            $a=$svalues[$z];
            $b=$values[$z];
            $c=$values[$e];
            $d=$svalues[$e];
            
           pg_query($connect,"insert into donationorder (foodcategories,quantity,foodexpiry,foodtype) values('$a','$b','$c','$d')");
            //echo $j;
            //echo"</br>";
           /*echo $a;
           echo $b;
           echo $c;
           echo $d;*/
           $j++;

        }
        $i=$i+2;
    }
    //echo count($values);
    //pg_query($connect,"insert into donationorder values('nonveg','3','4','nonbaked')");
    //print_r($svalues);
    //print_r($values);
    header('Location: http://localhost:8000//donor.html');

    
?>
