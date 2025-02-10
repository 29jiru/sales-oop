<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <div class="row m-5">
            <div class="col-4 ">
                <form action="#" method="post">
                    <label for="">Full Name</label><br>
                    <input type="text" name="name" id="name" class="form-control" placeholder="john Doe">
                    <br>

                    <label for="">Civil Status</label><br>
                    <select name="civil" id="civil" class="form-control" required>
                        <option value="">Select Civil Status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                    </select>
                    <br>

                    <label for="">Position</label><br>
                    <select name="position" id="position" class="form-control" required>
                        <option disabled selected>Select Position</option>
                        <option value="admin">Admin</option>
                        <option value="staff">Staff</option>
                    </select>
                    <br>

                    <label for="">Employment Status</label><br>
                    <select name="employ" id="employ" class="form-control" required>
                        <option disabled selected>Select Employment Status</option>
                        <option value="1">Contractual</option>
                        <option value="2">Probationary</option>
                        <option value="3">Regular</option>
                    </select>
                    <br>

                    <label for="">Regular Hours Rendered</label><br>
                    <input type="number" name="base_hour" id="base_hour" min="1" class="form-control W-100" value="40" placeholder="">
                    <br>

                    <label for="">Over Time Hours</label><br>
                    <input type="number" name="over_hour" id="over_hour" min="0" class="form-control W-100" value="0" placeholder="">
                    <br>
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="btn_submit" class="w-100 text-light bg-success rounded-2 border-0 py-2">Submit</button>
                    </div>
                </form>
            </div>
            <!-- Table -->
            <div class="col-8">
                <?php
                include 'employee.php';
                if (isset($_POST['btn_submit'])) {
                    $name = $_POST['name'];
                    $civil = $_POST['civil'];
                    $position = $_POST['position'];
                    $employ = $_POST['employ'];
                    $base_hour = $_POST['base_hour'];
                    $over_hour = $_POST['over_hour'];

                    $Employee = new Employee($name, $civil, $position, $employ, $base_hour, $over_hour);
                }
                ?>

                <table border="1" cellpadding="10" class="table table-striped">
                    <tbody>
                        <tr>
                            <td class="text-light bg-dark ">Full Name</td>
                            <td> <?= $Employee->getName() ?> </td>
                        </tr>

                        <tr>
                            <td class="text-light bg-dark">Civil Status</td>
                            <td> <?= $Employee->getCivil() ?></td>
                        </tr>

                        <tr>
                            <td class="text-light bg-dark">Position</td>
                            <td> <?= $Employee->getPosition() ?> </td>
                        </tr>

                        <tr>
                            <td class="text-light bg-dark">Employment Status</td>
                            <td> <?= $Employee->getEmployee() ?> </td>
                        </tr>

                        <tr>
                            <td rowspan="2" class="text-light bg-dark">Gross Income</td>
                            <td> <?= number_format($Employee->getGrossIncome(),2) ?> </td>
                        </tr>
                        <tr>
                            <!-- 内容文 -->
                            <td>Regular Pay:(<?= $base_hour ?>hrs x <?= $Employee->getBaseRate() ?>/day) + OT Pay:(<?= $over_hour ?>hrs x <?= $Employee->getOverRate() ?>/hour)</td>
                        </tr>

                        <tr>
                            <td rowspan="2" class="text-light bg-dark">Net Income</td>
                            <td> <?= $Employee->getNetIncome() ?> </td>
                        </tr>
                        <tr>
                            <!-- 内容文 -->
                            <td>Gross Income:(<?= $Employee->getGrossIncome() ?>) - (Tax:<?= $Employee->getTax() ?> + Health Care:<?= $Employee->getHealthcare() ?>)</td>
                        </tr>

                    </tbody>
                </table>





            </div>
        </div>
</body>

</html>