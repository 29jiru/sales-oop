<?php
session_start();

require '../classes/User.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Delete User</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-light" style="margin-bottom: 80px;">
        <div class="container d-flex justify-content-between">
            
            <a href="dashboard.php" class="navbar-brand">
                <i class="fa-solid fa-house display-6"></i>
            </a>

            <span class="navbar-text text-secondary mx-auto">Welcome, <?= $_SESSION['username'] ?></span>

            <form action="../actions/logout.php" method="post" class="d-flex">
                <button type="submit" class="text-danger bg-transparent border-0">
                    <i class="fa-solid fa-user-xmark display-6"></i>
                </button>
            </form>
        </div>
    </nav>

    <main class="row justify-content-center gx-0">
        <div class="col-4 text-center">
            <i class="fa-solid fa-triangle-exclamation text-warning display-4 d-block mb-2"></i>
            <h2 class="text-danger mb-5">DELETE PRODUCT</h2>

            <p class="fw-bold">Are you sure you want to delete your product?</p>

            <div class="row">
                <dvi class="col">
                    <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                </dvi>
                <dvi class="col">
                    <form action="../actions/delete-product.php" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                    </form>
                </dvi>
            </div>
        </div>
    </main>
</body>
</html>