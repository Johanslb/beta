<?php
 $host = "localhost";
 $port = "5432";
 $dbname = "beta";
 $username = "postgres";
 $password = "cesmag";

 
 //variables de conectividad

 $data_connection = "
 host = $host
 port = $port
 dbname = $dbname
 user = $username
 password = $password";


 $conn =pg_connect($data_connection);
    if(!$conn){
       die("coneection falled".preg_last_error());  
    }
    else { echo"connection successfully";
    }

    pg_close($conn);
    ?>