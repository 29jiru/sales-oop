<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Activity<i class="fa fa-folder-open-o" aria-hidden="true"></i></title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container w-50">
        <h1 class="text-center">REGISTRATION</h1>
        <form action="#" method="post">
            <label for="">Student's Name</label><br>
            <input type="text" name="name" id="name" class="form-control W-100" placeholder="名を名乗れ！この無礼者がっ！">
            <br>

            <label for="">Year Level</label><br>
            <select name="year" id="year" class="form-control W-100" >
                <option value="">Choose your year level</option>
                <?php
                for ($i = 1; $i <= 4; $i++) {
                    echo "<option value='$i'>Year $i</option>";
                }
                ?>
            </select>
            <br>

            <label for="">Total Units</label><br>
            <input type="number" name="unit" id="unit" min="1" max="23" class="form-control W-100" placeholder="Maximum of 23">
            <br>

            <div class="d-flex justify-content-center mb-4">
                <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" name="lab" id="lab" value="lab">
                    <label class="form-check-label" for="male">With lab</label>
                </div>
                <div class="form-check mx-2">
                    <input class="form-check-input" type="radio" name="lab" id="lab" value="no_lab">
                    <label class="form-check-label" for="female">Without lab</label>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" name="btn_submit" class="w-100 text-light bg-black rounded-2 border-0 py-2">Submit</button>
            </div>
        </form>

        <?php

        include 'school.php';

        if (isset($_POST['btn_submit'])) {
            $name = $_POST['name'];
            $year = $_POST['year'];
            $unit = $_POST['unit'];
            $lab = $_POST['lab'];

            // INSTANTIATE CLASS
            $School = new School;

            // SET VALUES
            $School->setValues($name, $year, $unit, $lab);

            // GET AND DISPLAY VALUES
            echo "<div class='w-100  border border-1 fs-6 mt-4 p-4'>";

            echo "<p>Student name: <b>" . $School->getName() . "</b></p>";
            echo "<p>Year level: <b>" . $School->getYear() . "</b></p>";
            echo "<p>No. of units: <b>" . $School->getUnit() . "</b></p>";
            echo "<p><b>Total Price: " . $School->getPrice() . "</b></p>";
            echo "</div>";
        }
        ?>
    </div>
    <?Php

    ?>


</body>

</html>