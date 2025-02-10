<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap & Font awesome & CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-50 mx-auto my-auto">
                <div class="card-header bg-white border-0 my-3">
                    <h1 class="text-center text-danger display-1"><i class="fa-solid fa-user-plus text-danger"></i> Registration</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/register.php" method="post">
                        <div class="d-flex col">
                            <div class="mb-3 w-50 me-5">
                                <label for="first_name" class="form-label mx-auto">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" required>
                            </div>
                            <div class="mb-3 w-50">
                                <label for="last_name" class="form-label mx-auto">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control fW-bold" maxlength="15" required>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="form-label ">Password</label>
                            <input type="password" name="password" id="password" class="form-control" minlength="8" aria-describedby="password-info" required>
                            <!-- <div class="form-text" id="password-info mb-5">
                                Password must be at least 8 characters long.
                            </div> -->
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>