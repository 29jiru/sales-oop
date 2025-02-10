<?php
require '../classes/Product.php';
session_start();

$id = $_GET['id'];

$product_obj  = new Product;
$product      = $product_obj->getProduct($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Product</title>
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
            <i class="fa-solid fa-pen-to-square text-warning display-5 me-3"></i><span class="text-warning display-5 fw-bold">Edit Product</span>
            </div>
        </div>
                            
        <form action="../actions/edit-product.php" method="post">
            <div class="row mb-3">
                <div class="col">
                    <label for="product-name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" id="product-name" class="form-control" value="<?= $product['product_name'] ?>" required autofocus>
                </div>
            </div>
                                                    
            <div class="row mb-3">
                <div class="col">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <div class="input-group-text">$</div>
                            <input type="number" name="price" id="price" class="form-control" value="<?= $product['price'] ?>" required>
                        </div>
                </div>
                <div class="col">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product['quantity'] ?>" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <button type="submit" class="btn btn-warning w-100">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>