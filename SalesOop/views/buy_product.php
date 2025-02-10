<?php
session_start();
require '../classes/User.php';
$user_obj = new User;
$id       = $_GET['product_id'];
$product  = $user_obj->getProduct();

$user = new user;
// $max  = $product['quantity'];
$_SESSION['product_id']  = $_GET['product_id'];
$_SESSION['product_name']  = $product['product_name'];
$_SESSION['price']  = $product['price'];
$_SESSION['stock']  = $product['quantity'];
$_SESSION['stock']  = $product['quantity'];
// $all_users = $user->getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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

    <main class="row justify-content-center gx-0 w-100">
        <div class="col-4">
            <h2 class="text-center mb-4 text-success display-3 fw-bold"><i class="fa-solid fa-cash-register"></i> Buy Product</h2>

            <div class="mb-3">
                <label for="product_name" class="form-label text-secondary">Product Name</label>
                <div>
                    <p class="display-5 fw-bold "><?= $_SESSION['product_name'] ?></p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="mb-3 col">
                    <label for="price" class="form-label text-secondary">Price</label>
                    <div class="input-group">
                        <p class="display-5 fw-bold ">$ <?= $_SESSION['price'] ?></p>

                    </div>
                </div>
                <div class="mb-3 col">
                    <label for="quantity" class="form-label text-secondary">Stocks Left</label>
                    <p class="display-5 fw-bold "><?= $_SESSION['stock'] ?></p>

                </div>
            </div>
            <form action="../actions/buy-product.php" method="post">
                <div class="col mb-4">
                    <label for="buyQuantity" class="form-label text-secondary">Buy Quantity</label>
                    <input type="number" name="buy_quantity" id="buy_Quantity" class="form-control w-75 mx-auto py-2 " min="0" max="<?= $_SESSION['stock'] ?>" required autofocus>
                </div>
                <div class="w-100">
                    <button type="submit" class="btn btn-success text-light btn-sm py-2 w-100">Pay</button>
                </div>
            </form>

        </div>
    </main>
</body>

</html>