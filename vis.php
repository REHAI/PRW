<?php
$link = mysqli_connect("localhost", "root", "", "myform");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM mytable";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
                echo "You are the subscriber number ";
        while($row = mysqli_fetch_array($result)){

                echo   $row['ID'] ;
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
