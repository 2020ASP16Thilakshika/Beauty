<?php

define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','ecommerce');



try{
    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
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