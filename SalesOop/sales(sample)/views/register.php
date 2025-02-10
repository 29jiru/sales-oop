<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registration</title>
</head>
<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-white border-0 my-3 text-center">
                    <i class="fa-solid fa-user-plus text-danger display-6 me-2"></i><span class="text-danger display-6 fw-bold">Registration</span>
                </div>
                <div class="card-body">
                    <form action="../actions/register.php" method="post">
                        <div class="row mb-3">
                            <div class="col-6 ps-0">
                                <label for="first-name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                            </div>
                            <div class="col-6 pe-0">
                                <label for="last-name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last-name" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" maxlength="15" required>
                        </div>

                        <div class="row mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" minlength="4" required>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-danger w-100">Register</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>