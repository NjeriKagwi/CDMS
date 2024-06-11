<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
         /*navbar section*/

         nav{
            background-color: rgb(250,230,234);
        }

        body{
            background-color: #ebf5fb;
        }

        .navbar h5{
            color: rgb(75,134,254);
        }

        .navbar-toggler:focus{
            box-shadow: none !important;
            border-style: none !important;
        }

        /*Footer section*/
        .footer h4{
            color: white;
        }

        ::placeholder{
            padding-left: 10px;
        }

        .footer #email{
            height: 40px;
        }
    </style>
</head>
<body>


    <!-- Navbar section -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand text-wrap">
                <h5 class="fw-bold">Baby Day Care Management System</h5>
            </a>

            <button class="navbar-toggler" type="button" data-bs-target="#navbar-menu" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="enrollment.php" class="nav-link">Enroll</a>
                    </li>
                    <li class="nav-item">
                        <a href="babysitter.php" class="nav-link">Babysitter</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="services">
        <div class="services">
            <div class="container">

                <div class="services-title pt-3 pb-5">
                    <h4 class="fw-bold text-center">Baby Care Services</h4>
                </div>

                <div class="services-body">
                    <div class="row">

                        <div class="col-md-6 d-inline-flex">

                            <div class="col-md-4">
                                <img src="images/about-image.png" alt="" class="image-fluid" width="100%">
                            </div>

                            <div class="col-md-8 ms-4" style="text-align: justify;">
                                <h6>Healthy Food</h6>
                                <p>Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. Quo, vel.</p>
                            </div>

                        </div>

                        <div class="col-md-6 d-inline-flex">

                            <div class="col-md-4">
                                <img src="images/about-image.png" alt="" class="image-fluid" width="100%">
                            </div>

                            <div class="col-md-8 ms-4" style="text-align: justify;">
                                <h6>Home Services</h6>
                                <p>Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. Quo, vel.</p>
                            </div>

                        </div>

                        <hr style="color: rgb(75,134,254);" class="mt-3">

                        <div class="col-md-6 d-inline-flex">

                            <div class="col-md-4">
                                <img src="images/about-image.png" alt="" class="image-fluid" width="100%">
                            </div>

                            <div class="col-md-8 ms-4" style="text-align: justify;">
                                <h6>BabyCare</h6>
                                <p>Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. Quo, vel.</p>
                            </div>

                        </div>

                        <div class="col-md-6 d-inline-flex">

                            <div class="col-md-4">
                                <img src="images/about-image.png" alt="" class="image-fluid" width="100%">
                            </div>

                            <div class="col-md-8 ms-4" style="text-align: justify;">
                                <h6>Special Care</h6>
                                <p>Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. Quo, vel.</p>
                            </div>

                        </div>

                        <hr style="color: rgb(75,134,254);" class="mt-3">

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer section -->
    <section id="footer" style="margin-top: 80px;" class="bg-dark">
        <div class="footer">
            <div class="container text-center pt-5 pb-2">
                <h4 class="mb-5">Join our newsletter now</h4>
    
                <form action="" class="row g-2">
                    <div class="col-md-8">
                        <input type="email" name="email" id="email" placeholder="Email" style="width: 100%;">
                    </div>
                    <div class="col-md-4">
                        <input type="submit" value="Subscribe" class="btn btn-primary" style="width: 100%; border-radius: 0;">
                    </div>
                </form>
    
                <h6 style="color: white;" class="pt-5">&copy; 2023 Baby Daycare Management System.</h6> <br>
                <span>
                    <img src="images/facebook.png" alt="">
                    <img src="images/twitter.png" alt="">
                    <img src="images/rss.png" alt="">
                </span><br>
    
            </div>
        </div>
    </section>


    <!-- Bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>