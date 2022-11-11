<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Resister</title>
</head>
<body class="bg-light">
    <div style="height:100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 m-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center text-uppercase">Resister</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/resister.php" method="post">
                        <div class="mb-3">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first-name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last-name" required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Username</label>
                            <input type="text" name="username" id="username" class="form-control" maxlength="15" required>
                        </div>
                        <div class="mb-5">
                            <label for="username" class="form-label fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control" minlength="8" aria-describedby="password-info" required>
                            <div class="form-text" id="password-info">
                                Password must be at least 8 character long.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Resister</button>
                    </form>
                    <p class="text-center mt-3 small">Resistered already? <a href="index.php">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
