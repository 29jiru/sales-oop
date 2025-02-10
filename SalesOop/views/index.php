<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- Bootstrap & Font awesome & CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light ">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-50 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center display-1 text-primary fw-bold">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <div class="row mb-2">
                            <label for="username" class="col-3 col-form-label text-end">Username</label>
                            <div class="col-9">
                                <input type="text" name="username" id="username" placeholder="USERNAME" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="password" class="col-3 col-form-label text-end">Password</label>
                            <div class="col-9">
                                <input type="password" name="password" id="password" placeholder="PASSWORD" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-9 offset-3">
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                                <p class="text-center mt-3 small">
                                    <a href="register.php" class="btn btn-outline-danger bg-danger text-light">Create an Account</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>