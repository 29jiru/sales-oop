<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3 text-center">
                    <span class="text-primary display-6 fw-bold me-2">LOGIN</span><i class="fa-solid fa-right-to-bracket text-primary display-6"></i>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <div class="row">
                            <div class="col-4">
                                <div class="row mb-2">
                                    <label for="username" class="form-label">Username</label>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="form-label">Password</label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row mb-2">
                                    <input type="text" name="username" placeholder="Username" class="form-control" required autofocus>
                                </div>
                                <div class="row mb-3">
                                    <input type="password" name="password" placeholder="Password" class="form-control">
                                </div>
                                <div class="row mb-3">
                                    <button type="submit" class="btn btn-primary w-100">Login</button>
                                </div>
                                <div class="row">
                                    <a href="register.php" class="btn btn-danger w-100">Create an Account</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>