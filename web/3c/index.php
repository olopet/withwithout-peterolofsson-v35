<!DOCTYPE html>
<html>
<body>
<p class="text-black text-36 font-bold">ASSIGNMENT 3C</p><br><br>

<?php

$cars = array(
    array(
        "Top 10 Position: " => "1",
        "Model" => "Ford F-Series",
    ),
    array(
        "Top 10 Position: " => "2",
        "Model" => "Chevrolet Silverado",
    ),
    array(
        "Top 10 Position: " => "3",
        "Model" => "Ram Pickup",
    ),
    array(
        "Top 10 Position: " => "4",
        "Model" => "Toyota RAV4",
    ),
    array(
        "Top 10 Position: " => "5",
        "Model" => "Honda CR-V",
    ),
    array(
        "Top 10 Position: " => "6",
        "Model" => "Toyota Camry",
    ),
    array(
        "Top 10 Position: " => "7",
        "Model" => "Chevrolet Equinox",
    ),
    array(
        "Top 10 Position: " => "8",
        "Model" => "Honda Civic",
    ),
    array(
        "Top 10 Position: " => "9",
        "Model" => "GMC Sierra",
    ),
    array(
        "Top 10 Position: " => "10",
        "Model" => "Toyota Tacoma",
    )
);

    if(isset($_GET['cars']))
    {
        echo $_GET['cars'];
    }
    else {
        echo 'no url parameters';
    } 
    
?>

</body>
</html>

