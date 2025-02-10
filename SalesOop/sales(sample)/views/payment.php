<?php
require '../classes/Product.php';

session_start();

$id = $_GET['id'];
$buy_quantity = $_GET['buy_quantity'];

$product_obj  = new Product;
$product      = $product_obj->getProduct($id);

$total_price = $product['price'] * $buy_quantity;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Buy Product</title>
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

<div class="d-flex justify-content-center mb-3">
    <div class="d-flex flex-column justify-content-center w-50">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center mb-2">
                <i class="fa-solid fa-hand-holding-dollar display-5 me-3 text-success"></i><span class="text-success display-5 fw-bold">Payment</span>
            </div>
        </div>
                            
        
            <div class="row mb-3">
                <div class="col">
                    <p>Product Name</p>
                    <h2 class="fw-bold"><?= $product['product_name'] ?></h2>
                </div>
            </div>
                                                    
            <div class="row mb-3">
                <div class="col">
                    <p>Total Price</p>
                    <h2 class="fw-bold">$ <?= $total_price ?></h2>
                </div>
                <div class="col">
                    <p>Buy Quantity <span class="text-danger">*</span> </p>
                    <h2 class="fw-bold"><?= $buy_quantity ?></h2>
                    <p class="text-danger">Maximum of <?= $product['quantity'] ?></p>
                </div>
            </div>

            <form action="../actions/payment.php" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label for="payment" class="form-label">Payment</label>
                        <div class="input-group w-50">
                            <div class="input-group-text">$</div>
                            <input type="number" name="payment" id="payment" class="form-control text-danger fw-bold" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="hidden" name="total_price" value="<?= $total_price ?>">
                        <input type="hidden" name="buy_quantity" value="<?= $buy_quantity ?>">
                        <input type="hidden" name="quantity" value="<?= $product['quantity'] ?>">
                        <button onclick="location.href='payment.php'" type="submit" class="btn btn-success w-100">Pay</button>
                    </div>
                </div>
            </form>
    </div>
</div>
</body>
</html>