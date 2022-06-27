<?php
        if($SESSION["name"]){
            if($SESSION['admin'] == 1){
        }
        }
    ?>
    
<form method="post" action="adminDestinationsFront.php">
<input type="destinations"/>
</form>

<form method="post" action="adminCustomersFront.php">
<input type="customers"/>
</form>

<form method="post" action="adminRecensies.php">
<input type="recensies"/>
</form>
<?php
else{
            header ('location: loginFront.php')
        }
    else{
    header ('location: loginAdmin.php')
        }
        ?>

