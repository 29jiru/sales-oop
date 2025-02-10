<?php
session_start();
require '../classes/User.php';
$user_obj   = new User;
$product       = $user_obj->getProduct();
$id = $_GET['product_id'];
// $user = ['first_name' => 'John', 'last_name' => 'smith', 'username' => 'John', 'photo' => 'null']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Bootstrap & Font awesome & CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!--  -->
    <nav class="navbar navbar-expend" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="">
                <h1 class="h3"><i class="fa-solid fa-house text-dark"></i></h1>
            </a>
            <span class="navbar-text">welcome, <?= $_SESSION['username'] ?></span>
            <div class="navbar-nav ">
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <a href="logout.php" class="">
                        <h1 class="h3"><i class="fa-solid fa-user-xmark text-danger"></i></h1>
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <main class="row justify-content-center gx-0 w-100">
        <div class="col-4">
            <h2 class="text-center mb-4 text-warning display-2"><i class="fa-solid fa-pen-to-square"></i> Edit Product</h2>
            <form action="../actions/edit-product.php" method="post">

                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product['product_name'] ?>" required autofocus>
                </div>
                <div class="row mb-3">
                    <div class="mb-3 col">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" id="price" name="price" step="1" min="0" value="<?= $product['price'] ?>" placeholder="0.00" required>
                        </div>
                    </div>
                    <div class="mb-3 col">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control " value="<?= $product['quantity'] ?>" required>
                    </div>
                </div>

                <div class="w-100">
                    <!-- 見えないインプット id渡す用 -->
                    <input type="hidden" name="product_id" value="<?= $id ?>">
                    <button type="submit" class="btn btn-warning btn-sm py-3 w-100">Edit</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>