<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>

<link rel="stylesheet" href="registerMakeUp.css">

<html>
<head>
<title>Make your account</title>

</head>
 
<body>
<h3>Make your account</h3>

<form action="register.php" method="POST">
  <table align="center" cellpadding = "10">
  <!----- First Name ---------------------------------------------------------->
    <tr>
      <td>Firstname</td>
      <td><input type="text" name="firstname" maxlength="30"/>
      (max 30 characters a-z and A-Z)z
      </td>
    </tr>


    <!----- Insertion ----------------------------------------------------------->

    <tr>
      <td>Insertion (not required)</td>
      <td><input type="text" name="insertion" maxlength="30"/>
      (max 30 characters a-z and A-Z)
      </td>
    </tr>
        <!----- Last Name ----------------------------------------------------------->

        <tr>
      <td>Lastname</td>
      <td><input type="text" name="lastname" maxlength="30"/>
      (max 30 characters a-z and A-Z)
      </td>
    </tr>

<!----- Customer Phone Number---------------------------------------------------------->
<tr>
<td>Mobile number</td>
<td>
<input type="text" name="customer_phone" maxlength="15" />
(max 15 digit number)
</td>
</tr>

<!----- Postalcode ---------------------------------------------------------->
<tr>
<td>Postalcode</td>
<td>
<input type="text" name="postalcode" maxlength="10" />
(max 10 characters a-z, A-Z and 0-9)
</td>
</tr>

<!-------------- City ---------------------------------------------------------->

<tr>
<td>City</td>
<td><input type="text" name="city" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Customer_email  ---------------------------------------------------------->
<tr>
<td>Email address</td>
<td><input type="text" name="customer_email" maxlength="50" />
(max 50 characters a-z, A-Z and 0-9)
</td>
</tr>
<!----- streetname  ---------------------------------------------------------->
<tr>
<td>Streetname</td>
<td><input type="text" name="streetname" maxlength="50" />
(max 50 characters a-z and A-Z)
</td>
</tr>
<!----- housenumber  ---------------------------------------------------------->
<tr>
<td>Housenumber</td>
<td><input type="text" name="housenumber" maxlength="4" />
(max 4 characters a-z, A-Z and 0-9)
</td>
</tr>

<td><--------------Complete your account creation by creating a username and password----------------> </td>


<!----- Username ---------------------------------------------------------->
<tr>
<td>Username</td>
<td><input type="text" name="username" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- password ---------------------------------------------------------->
<tr>
<td>Password</td>
<td><input type="text" name="pwd" maxlength="20" />
(max 20 characters a-z and A-Z)
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
</td>
</tr>




  </table>
</form>
 
</body>
</html>