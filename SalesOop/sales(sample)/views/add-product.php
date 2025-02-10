<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Product</title>
</head>
<body>
    <div class="modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="add-productLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn-close d-flex justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                        <div class="d-flex flex-column justify-content-center w-75">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center mb-2">
                                    <i class="fa-solid fa-box text-info display-5 me-3"></i><span class="text-info display-5 fw-bold">Add Product</span>
                                </div>
                            </div>
                            
                            <form action="../actions/add-product.php" method="post">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="product-name" class="form-label">Product Name</label>
                                        <input type="text" name="product_name" id="product-name" class="form-control" required autofocus>
                                    </div>
                                </div>
                                                    
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="price" class="form-label">Price</label>
                                        <div class="input-group">
                                            <div class="input-group-text">$</div>
                                                <input type="number" name="price" id="price" class="form-control" required>
                                            </div>
                                        </div>
                                    <div class="col">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" name="quantity" id="quantity" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-info w-100">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>