
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book <i class="fa fa-folder-open-o" aria-hidden="true"></i></title>
</head>

<body>
    <form action="#" method="post">
        <label for="age"></label>
        <input type="number" min="10" max="80" name="age" id="age" placeholder="AGE" >
        <br>

        <label for="km"></label>
        <input type="number" name="km" id="km" placeholder="Distance(km)">
        <br>

        <button type="submit" name="btn_submit">Submit</button>
    </form>
</body>

</html>

<?Php
include 'fare.php';

if (isset($_POST['btn_submit'])) {
    $age = $_POST['age'];
    $km = $_POST['km'];

    // INSTANTIATE CLASS
    $Fare = new Fare;

    // SET VALUES
    $Fare->setValues($age, $km);

    // GET AND DISPLAY VALUES
    echo "Age: " .$Fare->getAge()." years old<br>";
    echo "Distance: " .$Fare->getKm()." km<br>";
    echo "Fare: " .$Fare->getFare()."<br>";
}
?>

