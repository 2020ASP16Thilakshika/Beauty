<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
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