<?php
//get the db conection file
require_once 'config.php';


try{
 
    //Query
    
    $sql = "SELECT * FROM users";

    //excute the query
    $result = mysqli_query($connect,$sql);
    //check if data exists in the table
    if (mysqli_num_rows($result)>0){
        echo "<table border='1'>";
        $col = mysqli_fetch_fields($result);
        echo "<tr>";
        foreach ($col as $value){
            echo "<td> $value->email</td>";
        }
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            foreach ($row as $key=>$value){
                echo "<td> $value</td>";
            }
            echo "</td>";
        }
        echo "</table>";

    }
    else{
        echo "No results";
    }
}
catch(Exception $e){
    die($e->getMessage());
}



?>