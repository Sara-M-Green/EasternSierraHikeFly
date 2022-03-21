<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eastern Sierra Hike and Fly</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <img class="logo" src="images/eslogo.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Flights
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#sherwins">The Sherwins</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#mcgee">McGee Mountain</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#convict">Convict Canyon</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
        </div>
    </nav>

    <!-- Beginning of site -->
    <div class="flex-container">
        <div class="flex-item head-item head-left">
            <div class="head-text">
                <h1>Eastern Sierra Hike and Fly.</h1>
                <h2>Experience your favorite mountain range from a brand new perspective.</h2>
                <a class="btn btn-light btn-md head-btn" href="#contact" role="button">Let's Soar!</a>
            </div>
        </div>
        <div class="flex-item head-item head-right"></div>
    </div>

    <!-- About Us Section -->
    <div class="pilots section" id="about-us">
            <h2 class="text-center">Let Us Take You Under Our Wing</h2>
            <h3>on an adventure of a lifetime</h3>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            
            <!-- youtube video -->
            <div class="video-container">
            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/fQGZtLK9hJY?autoplay=1&mute=1&controls=0"></iframe>
            </div> 
    </div>

    <!-- Meet The Pilots -->
    <div class="section meet-us">
        <h2 class="text-center">Meet the Pilots!</h2>
    
        <!-- Sarah-->
        <div class="meet-us-container">
            <div class="sarah-left meet-us-item">
                <h3 class="left-align sarah-heading">Sarah Saturday</h3>
                <p class="about-sarah right-align">Poop on floor and watch human clean up behind the couch, grab pompom in mouth and put in water dish, kitty scratches couch bad kitty yet friends are not food then cats take over the world and hey! you there, with the hands. Destroy couch whatever chase the pig.</p>
            </div>
            <div class="sarah-right meet-us-item">
                <img class="max-w-100" src="images/sarah-meet-us.jpg">
            </div>
        </div>

         <!-- Ben-->
        <div class="meet-us-container-reverse">
            <div class="ben-right meet-us-item">
                <img class="max-w-100" src="images/ben-meet-us.jpg">
            </div>
            <div class="sarah-left meet-us-item">
                <h3 class="left-align sarah-heading">Ben Peck</h3>
                <p class="about-sarah right-align">Poop on floor and watch human clean up behind the couch, grab pompom in mouth and put in water dish, kitty scratches couch bad kitty yet friends are not food then cats take over the world and hey! you there, with the hands. Destroy couch whatever chase the pig.</p>
            </div>
        </div>
    <div>

    <div class="our-flights">
        <h2 class="text-center">Tandem Flight Offerings</h2>
        <div class="flight-container">
            <div class="card flight-item" id="sherwins">
                <img class="flight-photo" src="images/img2.JPG" alt="the-sherwins" style="width:100%">
                <div class="card-container">
                    <h4><b>The Sherwins</b></h4>
                    <p>Hike & Fly</p>
                    <p>What more could you need when you have meat covered in cheese nestled between bread as a complete meal.</p>
                    <a class="btn btn-light btn-md head-btn" href="#contact" role="button">Book Now</a>
                </div>
            </div>
            <div class="card flight-item" id="mcgee">
                <img class="flight-photo" src="images/img3.JPG" alt="mcgee-mountain" style="width:100%">
                <div class="card-container">
                    <h4><b>McGee Mountain</b></h4>
                    <p>Shuttled Flight</p>
                    <p>What more could you need when you have meat covered in cheese nestled between bread as a complete meal.</p>
                    <a class="btn btn-light btn-md head-btn" href="#contact" role="button">Book Now</a>
                </div>
            </div>   
            <div class="card flight-item" id="convict">
                <img class="flight-photo" src="images/img4.JPG" alt="convict" style="width:100%">
                <div class="card-container">
                    <h4><b>Convict Canyon</b></h4>
                    <p>Hike & Fly</p>
                    <p>What more could you need when you have meat covered in cheese nestled between bread as a complete meal.</p>
                    <a class="btn btn-light btn-md head-btn" href="#contact" role="button">Book Now</a>
                </div>
            </div>   
        </div>

    </div>

    <!-- <a id="flight-info">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Fly With Us!</h2>
                <div class="container-fluid">
                    <div class="row">

                        <div class="card flight" id="sherwins" style="width: 18rem;">
                            <img class="card-img-top" src="images/img2.JPG" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Hike the Sherwins</h5>
                                <p class="card-text flight-card">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#contact" class="btn btn-primary">Book Now!</a>
                            </div>
                        </div>

                            
                        <div class="card flight" id="mcgee" style="width: 18rem;">
                            <img class="card-img-top" src="images/img3.JPG" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">McGee Mountain</h5>
                                <p class="card-text flight-card">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#contact" class="btn btn-primary">Book Now!</a>
                            </div>
                        </div>

                        <div class="card flight" id="convict" style="width: 18rem;">
                            <img class="card-img-top" src="images/img4.JPG" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Convict Canyon</h5>
                                <p class="card-text flight-card">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#contact" class="btn btn-primary">Book Now!</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </a> -->

    

    <a id="contact">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Let's Chat!</h2>
                <p class="text-center">Have Questions? Ready To Book?</p>
            </div>

            <div class="w-50 m-auto">
                <form action="about.php" method="post">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input type="text" name="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Message:</label>
                        <input type="text" name="message" class="form-control message-input">
                    </div>
                    <button type="submit" class="btn contact-btn">Submit</button>
                </form>
            </div>
            </section>
        </a>

    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>