<?php
//constant variable
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','Day11');

//connect with database
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
//echo "abc<br>";

?>