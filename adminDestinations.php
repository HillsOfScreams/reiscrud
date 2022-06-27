<?php
    include_once('includes/connect.php');
    
    // Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if ( !isset($_POST['submit']) ) {
        // Could not get the data that should have been sent.
        exit('Not allowed to come here!');
    } else {
        $continent = $_POST['continent'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $postalcode = $_POST['postalcode'];
        $streetname = $_POST['streetname'];
        $housenumber = $_POST['housenumber'];
        $price = $_POST['price'];
        $accommodation_type = $_POST['accommodation_type'];
       
        
        $sql = "INSERT INTO destination (continent, country, city, accommodation_type) VALUES (:continent, :country, :city, :accommodation_type)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':continent', $continent);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':accommodation_type', $accommodation_type);
        $stmt->execute();

        $destination_id = $con->lastInsertId();

        $sql = "INSERT INTO destination_na (destination_id, streetname, postalcode, housenumber, price) VALUES (:destination_id, :streetname, :postalcode, :housenumber, :price)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':destination_id', $destination_id);
        $stmt->bindParam(':streetname', $streetname);
        $stmt->bindParam(':postalcode', $postalcode);
        $stmt->bindParam(':housenumber', $housenumber);
        $stmt->bindParam(':price', $price);
        $stmt->execute();  
        header('Location: adminDestinationsFront.php');
        exit();



    }
    
?>