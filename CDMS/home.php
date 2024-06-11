<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Daycare Management System</title>

    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Local stylesheet -->
    <link rel="stylesheet" href="style.css">

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


    <!-- Hero Section -->
    <section id="hero">
        <div class="hero" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/hero-image.jpg');">
            <div class="container">
                <div class="hero-text">
                    <h5>Baby caretaker</h5>
                    <h4>BEST BABYSITTING SERVICES</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                
                <button class="btn btn-primary " type="button">Read More</button>
            </div>
        </div>
    </section>

    <!-- About us section -->
    <section id="about">
        <div class="about pt-5">
            <div class="container">
                <h6 style="color: rgb(75,134,254);">About us</h6>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/about-image.png" class="image-fluid w-100" alt="">
                    </div>
                    <div class="col-md-6 pb-md-3">
                        <h5>About Us</h5>
                        <p class="pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dolor,totam consequuntur voluptates nihil vitae exercitationem delectus illo. Consequuntur corrupti nemo architecto perferendis. Fuga sapiente non provident minus, accusantium neque atque voluptates eligendi aspernatur architecto molestiae earum! Voluptatum, voluptatem? Placeat enim, impedit saepe consequatur cumque eligendi molestiae doloremque officiis, dolorem deleniti eaque? Officiis nobis dolore veritatis! Cumque aliquam minus fugit, corporis optio architecto amet ea nemo quod, nam nesciunt!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Babysitters section -->
    <section id="babysitters">
        <div class="babysitters pt-5">
            <div class="container">
                <div class="babysitters-title text-center">
                    <h4 class="fw-bold">Our Babysitters</h4>
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

 
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>