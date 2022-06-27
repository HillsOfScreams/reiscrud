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
<title>Add your travels!</title>

</head>
 
<body>
<h3>add your destination info!</h3>

<form action="adminDestinations.php" method="POST">
  <table align="center" cellpadding = "10">
  <!----- Destination continent ---------------------------------------------------->
    <tr>
      <td>Continent</td>
      <td><input type="text" name="continent" maxlength="30"/>
      
      </td>
    </tr>
      <!----- Destination country -------------------------------------------------->
      <tr>
      <td>Country</td>
      <td><input type="text" name="country" maxlength="30"/>
      
      </td>
    </tr>
      <!----- Destination city ----------------------------------------------------->
      <tr>
      <td>Nearest city</td>
      <td><input type="text" name="city" maxlength="30"/>
      
      </td>
    </tr>
      <!----- streetname ----------------------------------------------------------->
      <tr>
      <td>Streetname</td>
      <td><input type="text" name="streetname" maxlength="30"/>
      
      </td>
    </tr>
      <!----- postalcode ----------------------------------------------------------->
      <tr>
      <td>Postalcode</td>
      <td><input type="text" name="postalcode" maxlength="30"/>
      
      </td>
    </tr>
      <!----- housenumber ---------------------------------------------------------->
      <tr>
      <td>Housenumber</td>
      <td><input type="text" name="housenumber" maxlength="30"/>
      
      </td>
    </tr>
      <!----- Destination price ---------------------------------------------------->
      <tr>
      <td>Price</td>
      <td><input type="text" name="price" maxlength="30"/>
      
      </td>
    </tr>
     <!----- accommodation type ---------------------------------------------------->
     <tr>
      <td>Accommodation type</td>
      <td><input type="text" name="accommodation_type" maxlength="30"/>
      
      </td>
    </tr>
    </tr>
      <!----- submit --------------------------------------------------------------->
      <tr>
        <td>
    <input type="submit" name="submit"/>
      
      </td>
    </tr>

<tr>
</form>
</tr>
</table>

 
</body>
</html>