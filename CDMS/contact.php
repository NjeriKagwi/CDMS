<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>

        body{
            background-color: #ebf5fb;
        }
        /*navbar section*/

        nav{
            background-color: rgb(250,230,234);
        }

        .navbar h5{
            color: rgb(75,134,254);
        }

        .navbar-toggler:focus{
            box-shadow: none !important;
            border-style: none !important;
        }

        /*contact us section*/
        .form-control:focus{
            box-shadow: none;
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


    <!-- Contact Section -->
    <section id="contact">
        <div class="contact">
            <div class="container">
                <div class="contact-title text-center pt-3 pb-4">
                    <h4 style="color: rgb(75,134,254);">Contact Us</h4>
                </div>

                <div class="contact-body">
                    <div class="row g-2">
                        <div class="col-md-4 text-center">
                            <div class="contact-1 pt-2 pb-2" style="background: white; box-sizing: border-box; box-shadow: 5px 0 5px 0 grey;">
                                <h6>Address</h6>
                                <p>#890 CFG apartment , Mayur Vihar, <br> Delhi-India</p>
                            </div>
                        </div>

                        <div class="col-md-4 text-center">
                            <div class="contact-2 pt-2 pb-2" style="background: white; box-sizing: border-box; box-shadow: 5px 0 5px 0 grey;">
                                <h6>Phone</h6>
                                <p>+1234567890</p>
                            </div>
                        </div>

                        <div class="col-md-4 text-center text-wrap">
                            <div class="contact-3 pt-2 pb-2" style="background: white; box-sizing: border-box; box-shadow: 5px 0 5px 0 grey;">
                                <h6>Email Us</h6>
                                <p>bdcmsinfo@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="" class="row needs-validation pt-5" novalidate>
                    <div class="row">
                        <div class="col-md-6 pb-3">
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                        </div>
    
                        <div class="col-md-6 pb-3">
                            <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control">
                        </div>

                        <div class="col-md-6 pb-3">
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone">
                        </div>

                        <div class="col-md-6 pb-3">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
    
                        <div class="col-md-12 pb-3">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                        </div>
    
                        <div class="col-md-12">
                            <input type="submit" value="Send" class="btn btn-primary w-100" style="color: white;">
                        </div>
                    </div>
                </form>
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