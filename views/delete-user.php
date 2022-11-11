<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Delete</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom:80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h3>The Company</h3>
            </a>
            <div class="navbar-nav">
                <span class="navbar-text"><?=$_SESSION['ful_name']?></span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="row justify-content-center">
        <div class="col-4 text-center">
        <i class="fa-solid fa-triangle-exclamation text-warning display-4"></i>
        <h2 class="text-danger mb-5 text-uppercase">Delete Account</h2>

        <p class="fw-bold">Are you sure you want to delete your account?</p>

        <div class="row">
            <div class="col">
                <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>            
            </div>
            <div class="col">
                <form action="../actions/delete-user.php" method="post">
                    <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                </form>
            </div>
        </div>
        </div>
    </main>

    
</body>
</html>