<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";


$connect = mysqli_connect($servername,$username,$password,$dbname);
try{
    if(!$connect){
        die("connection failed");
    }
    else{
        echo "connected successfully";
    }
}
catch (Exception $e){
    die($e->getMessage());

}

echo "<br>";

?>