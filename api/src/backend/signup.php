<?php
require('../../config/db_connection.php');

$email= $_POST['email']
$pass = $_POST['password'];
$enc_pass = md5($pass);

$query = "INSERT INTO users(email, password)
values ('$email','$enc_pass')";
$result = pg_query($conn, $query);

if($result){
    echo "registered successfully";
}else{
    echo "registered failed";
}
pg_close($conn);
?>