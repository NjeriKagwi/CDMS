<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>

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

        /*enrollment section*/
        .form-control:focus{
            box-shadow: none;
        }

        .form-select:focus{
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

    <!-- Enrollment section -->
    <section id="enrollment">
        <div class="enrollment">
            <div class="container">
                <div class="enrollment-title text-center pt-3">
                    <h4 style="color: rgb(75,134,254);">Enroll Form</h4>
                </div>
                <div class="enrollment-body p-4">
                    <form action="" class="row needs-validation" novalidate>

                        <h6 class="pb-4" style="color: rgb(75,134,254);">Primary Detail</h6>

                        <div class="col-md-6">
                            
                            <label for="name" class="form-label">Your Name:</label>
                            <input type="text" name="name" id="name" class="form-control"><br>

                            <label for="anumber" class="form-label">Alternate Mobile Number:</label>
                            <input type="tel" name="anumber" id="anumber" class="form-control"><br>

                            <label for="Cname" class="form-label">Child Name:</label>
                            <input type="text" name="Cname" id="Cname" class="form-control"><br>

                            <label for="gender" class="form-label">Child Gender:</label>
                            <select name="gender" id="gender" class="form-select"><br>
                                <option value="1">Choose gender</option>
                                <option value="2">Male</option>
                                <option value="3">Female</option>
                            </select>

                        </div>

                        <div class="col-md-6">
                            
                            <label for="number" class="form-label">Mobile Number:</label>
                            <input type="tel" name="number" id="number" class="form-control"><br>

                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control"><br>

                            <label for="dob" class="form-label">Date Of Birth:</label>
                            <input type="date" name="dob" id="dob" class="form-control"><br>

                            <label for="program" class="form-label">Program:</label>
                            <select name="program" id="program" class="form-select"><br>
                                <option value="1">Choose Program</option>
                                <option value="2">Play Group(1.5-2.5 yrs)</option>
                                <option value="3">Nursery(2.5-3.5 yrs)</option>
                                <option value="1">Lower KG(3.5-4.5 yrs)</option>
                                <option value="1">Upper KG(4.5-6 yrs)</option>
                            </select>
                        </div>
                    </form>

                    <form action="" class="row">

                        <h6 style="color: rgb(75,134,254);" class="pt-4 pb-3">Address Details</h6>

                        <div class="col-md-6">

                            <label for="address" class="form-label">Address:</label>
                            <input type="text" name="address" id="address" class="form-control"><br>

                            <label for="city" class="form-label">City:</label>
                            <input type="text" name="city" id="city" class="form-control"><br>

                            <label for="country" class="form-label">Country:</label>
                            <input type="text" name="country" id="country" class="form-control"><br>

                        </div>

                        <div class="col-md-6">

                            <label for="zipcode" class="form-label">Zipcode:</label>
                            <input type="number" name="zipcode" id="zipcode" class="form-control"><br>

                            <label for="state" class="form-label">State:</label>
                            <input type="text" name="state" id="state" class="form-control"><br>

                            <label for="landmark" class="form-label">Country:</label>
                            <input type="text" name="landmark" id="landmark" class="form-control"><br>
                            
                        </div>

                        <div class="col-md-12">
                            <input type="submit" value="Enroll" class="btn btn-primary w-100" style="color: white;">
                        </div>
                    </form>
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