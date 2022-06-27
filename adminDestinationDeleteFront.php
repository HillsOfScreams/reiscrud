<?php
 include_once('includes/connect.php');
    
$sql = "SELECT destination_id, continent, country, city, accommodation_type FROM destination";
$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->fetchall();
//$sql = "SELECT destination_id, housenumber, streetname, postalcode, housenumber, price FROM destination_na";
//$stmt = $con->prepare($sql);
//$stmt->execute();
//$result = $stmt->fetch();
foreach($result as $row){
    print_r("destination_id: " . $row['destination_id']. " ||continent: " . $row['continent']. " ||country:  " . $row['country']. " ||city: " . $row['city']. " ||accomodation_type: " . $row['accommodation_type']. " <br>");   
}







?>




















</form>