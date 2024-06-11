
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>

    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        .card{
            border-radius: 0;
            border-top: 3px solid blue;
            width: 30%;
            margin-top: 30vh;
            margin-left: 60vh;
        }

        .card-links a{
            text-decoration: none;
        }
        .form-control:focus{
            box-shadow: none;
        }

    </style>
</head>
<body>

<div class="container">
<div class="row">
    
    <div class="card">
        <div class="card-header text-center">
            <h2><b>Admin</b>|BDCMS</h2>
        </div>
        <div class="card-body">
            <p class="text-center">Sign in to start your session</p>
            <form action="validate.php" id="login-form" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="username" style="border-radius: 0;" required>
                    <div class="input-group-append">
                        <div class="input-group-text" style="border-radius: 0;">
                            <span><i class="bi bi-envelope-fill"></i></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="password" style="border-radius: 0;" required>
                    <div class="input-group-append">
                        <div class="input-group-text" style="border-radius:0;">
                            <span><i class="bi bi-lock-fill"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card-btn" style="float: right;">
                    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
                </div><br><br>
                <div class="card-links pt-4">
                    <a href="#">I forgot my password</a><br>
                    <a href="home.php">Home Page</a>
                </div>
            </form>
        </div>
    </div>
   </div>
</div>





    
    

    <!-- Bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>