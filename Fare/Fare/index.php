<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fare Activity</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="age" placeholder="Age" min="10" max="80"><br>
        <input type="number" name="distance" placeholder="Distance (km)" min="1"><br>
        <button type="submit" name="btn_compute">Compute</button>
    </form>
</body>
</html>

<?php
include_once "fare.php";

if(isset($_POST["btn_compute"])){
    $transpo = new Fare($_POST['age'], $_POST['distance']);

    // $transpo->setAge($_POST['age']);
    // $transpo->setDistance($_POST['distance']);
    $transpo->setFare();

    echo "Age: " .$transpo->getAge(). " years old<br>";
    echo "Distance: " .$transpo->getDistance(). " km<br>";
    echo "Fare: " .$transpo->getFare();
}

?>