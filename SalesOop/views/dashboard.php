<?php
session_start();
require '../classes/User.php';

$user      = new user;
$all_users = $user->getAllProducts();
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

    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="mb-0">Product List</h2>
                <a href="add-product.php" class="" title="add"><i class="fa-solid fa-plus fs-4 text-info"></i></a>
            </div>
            <table class="table table-hover align-middle">
                <?php
                if ($all_users->num_rows > 0) {
                ?>
                    <!-- thead output -->
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th><!-- for edit,delete buttons --></th>
                            <th><!-- for Buy()  --></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($product = $all_users->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td><?= $product['product_name'] ?></td>
                                <td><?= $product['price'] ?></td>
                                <td><?= $product['quantity'] ?></td>
                                <td>
                                    <!-- edit -->
                                    <a href="edit-product.php?product_id=<?= $product['id'] ?>" class="btn btn-warning" title="Edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <!-- delete -->
                                    <a href="delete-product.php?product_id=<?= $product['id'] ?>" class="btn btn-danger" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                                <td><a href="buy_product.php?product_id=<?= $product['id'] ?>" class="btn btn-success" title="Buy">
                                        <i class="fa-solid fa-cash-register"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                <?php
                    // productsが空だった場合の処理
                } else {
                ?>
                    <td class="w-100 p-5 m-o bg-dark">
                        <div class='text-danger text-center bg-dark'>
                            <p class="display-3">No Records Found</p>
                            <i class='fa-solid fa-skull-crossbones display-1'></i>
                        </div>
                    </td>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </main>
</body>

</html>