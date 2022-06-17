<?php
    include_once('includes/connect.php');
    
    // Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if ( !isset($_POST['username'], $_POST['pwd']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    } else {
        $stmt = $con->prepare('SELECT * FROM login WHERE username = :username');
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $result = $stmt->fetch();
        if ($result) {
            // Incorrect username
            echo 'Username already exists.';
        } else {
            $firstname = $_POST['firstname'];
            $insertion = $_POST['insertion'];
            $lastname = $_POST['lastname'];
            $customer_phone = $_POST['customer_phone'];
            $streetname = $_POST['streetname'];
            $postalcode = $_POST['postalcode'];
            $housenumber = $_POST['housenumber'];
            $city = $_POST['city'];
            $customer_phone = $_POST['city'];
            $customer_email = $_POST['customer_email'];
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];
            
            $sql = "INSERT INTO customer (customer_firstname, customer_insertion, customer_lastname) VALUES (:customer_firstname, :customer_insertion, :customer_lastname)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':customer_firstname', $firstname);
            $stmt->bindParam(':customer_insertion', $insertion);
            $stmt->bindParam(':customer_lastname', $lastname);
            $stmt->execute();

            $customer_id = $con->lastInsertId();
              
            $sql = "INSERT INTO customer_na (customer_id, streetname, postalcode, housenumber, city, customer_phone, customer_email) VALUES (:customer_id, :streetname, :postalcode, :housenumber, :city, :customer_phone, :customer_email)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':customer_id', $customer_id);
            $stmt->bindParam(':streetname', $streetname);
            $stmt->bindParam(':postalcode', $postalcode);
            $stmt->bindParam(':housenumber', $housenumber);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':customer_phone', $customer_phone);
            $stmt->bindParam(':customer_email', $customer_email);
            $stmt->execute();

            $sql = "INSERT INTO login (customer_id, username, password) VALUES (:customer_id, :username, :password)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':customer_id', $customer_id);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $pwd);
            $stmt->execute();     
        }
    }
?>