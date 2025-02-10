<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <!-- Bootstrap & Font awesome & CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
<nav class="navbar navbar-expend" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="">
                <h1 class="h3"><i class="fa-solid fa-house text-dark"></i></h1>
            </a>
            <span class="navbar-text">welcome, <?= $_SESSION['username'] ?></span>
            <div class="navbar-nav ">
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <a href="../actions/logout.php" class="btn ">
                    <!-- <button type="submit" class=""> -->
                        <h1 class="h3"><i class="fa-solid fa-user-xmark text-danger"></i></h1>
                        </a>
                    <!-- </button> -->
                </form>
            </div>
        </div>
    </nav>

    <main class="row justify-content-center gx-0">
        <div class="col-4 text-center">
            <i class="fa-solid fa-triangle-exclamation text-warning display-4 d-block mb-2"></i>
            <h2 class="text-danger mb-5">DELETE ACCOUNT</h2>

            <p class="fw-bold">Are you sure you want to delete product?</p>

            <div class="row">
                <div class="col">
                    <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col">
                    <form action="../actions/delete-product.php?product_id=<?= $_GET['product_id'] ?>" method="post">
                        <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>