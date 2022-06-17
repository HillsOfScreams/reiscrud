<?php
    include_once('includes/connect.php');
    
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT customer_ID, username FROM login WHERE username = ? AND password = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('ss', $_POST['username'], $_POST['password']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($customer_ID, $username);
        $stmt->fetch();
        // Verification success! User has logged-in!
        session_start();
        $_SESSION['customer_ID'] = $customer_ID;
        $_SESSION['username'] = $username;
        //header("Location: "); <------------ LOCATIE DUURSTUREN!!!
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
    }


	$stmt->close();
}
?>