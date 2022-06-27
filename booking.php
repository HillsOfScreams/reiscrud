<?php
    include_once('includes/connect.php');
    $sql = "SELECT username FROM login";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "Hello", "username: " . $row["username"]. " . "<br>";
            } 
        }
        

    
    ?>