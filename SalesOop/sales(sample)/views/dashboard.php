<?php

session_start();

require '../classes/User.php';
require 'add-product.php';

$user         = new User;
$all_products = $user->getAllProducts();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
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
        <div class="col-6">

            <div class="d-flex justify-content-between align-items-center">
                <span class="text-center display-6 fw-bold">Product List</span>
                <a href="add-product.php" data-bs-toggle="modal" data-bs-target="#add-product">
                    <i class="fa-solid fa-plus text-info display-6"></i>
                </a>
            </div>
            
            <?php
                if($all_products->num_rows == 0){
            ?>
            <div class="bg-dark h-100">
                <p class="text-danger text-center display-5 pt-5">No Records Found</p>
                <div class="d-flex justify-content-center">
                    <i class="fa-regular fa-circle-xmark text-danger display-1"></i>
                </div>
            </div>
            <?php
            }else{
            ?>
            <table class="table mt-4">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($product = $all_products->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?= $product['id']?></td>
                        <td><?= $product['product_name']?></td>
                        <td><?= $product['price']?></td>
                        <td><?= $product['quantity']?></td>
                        
                        <td>
                            <a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-warning" title="Delete">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a href="delete-product.php?id=<?= $product['id'] ?>" class="btn btn-danger" title="Delete">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </td>
                        <td>
                            <a href="buy-product.php?id=<?= $product['id'] ?>" class="btn btn-success" title="Buy">
                                <i class="fa-solid fa-cash-register"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>