<?php 
   include_once __DIR__ . '/../src/boostrap.php';
?>

<?php
 session_start();
 
   if(isset( $_GET['duree'])){
        $duree=htmlspecialchars($_GET['duree']);
        $duree=1;
       

    }
    //else header('Location:landing.php');


               
         
       
              
               getStatsOntime();
               
  
               // $output=shell_exec('netstat -e');
               // echo "<pre>$output</pre>";               

               ?> 
               