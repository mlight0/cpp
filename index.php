<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Career Path Plus  |  The journey to your next job starts now.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#myPage">CAREER PATH PLUS</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#careerpath">CAREER PATH</a></li>
                        <li><a href="#pricing">PRICING</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="#signup" class="btn link-btn" role="button">Sign Up</a></li>
                        <li><a href="careerpath.php" class="btn link-btn-wht" role="button">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
        <div  class="container-fluid">
            <div class="row ">

                <div class="col-sm-5">
                    <a href="#demo3" data-toggle="collapse">
                        <img src="images/subway-map-600x420_bl.png" class="img-responsive" alt="Employment Journey" width="600" height="420">
                    </a>
                </div>

                <div class="col-sm-7">
                    <h2 class='font-orange'>The journey to your next job starts now.</h2>
                    <h4>
                        In today's job market there is no time to waste. With the flood of competing candidates and the rise online job boards and recruiting web sites are all very promising, 
                        but you have to ask yourself, <i>"Why haven't I landed my next job yet?"</i>
                    </h4>
                    <p>
                        Whether you are a new grad or a seasoned professional, if you're in the job market you're likely overlooking one of the most critical aspects of turning an opportunity into a job offer.
                        It's the journey. Career Path Plus is designed to walk you though a proven methodology to take you from applicant to employed. 
                    </p>
                    <br><a href="#signup" class="btn btn-default btn-lg" role="button">Get Started</a>
                    
                </div>
            </div> 
        </div>

        <!-- Container (About Section) -->
        <div id="about" class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-8">
                    <h2>About Career Path Plus</h2><br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <br><button class="btn btn-default btn-lg">Get in Touch</button>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-signal logo"></span>
                </div>
            </div>
        </div>

        <div id="signup" class="container-fluid">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                   <div class="well well-lg">
                    <h2 class="font-orange">Start Your Journey now</h2>
                    <form action="careerpath.php"> 
                        <div class="form-group">
                          <label for="firstname">First Name:</label>
                          <input type="firstname" class="form-control" id="firstname">
                        </div>
                        <div class="form-group">
                          <label for="lastname">Last Name:</label>
                          <input type="lastname" class="form-control" id="lastname">
                        </div>
                        <div class="form-group">
                          <label for="email">Email address:</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="text-center">
                        By clicking Join now, you agree to the Career Path Plus User Agreement, Privacy Policy, and Cookie Policy.
                        <br><br>
                        <button type="submit" class="btn btn-default btn-lg font-orange" >Sign me up!</button>
                        </div>
                    </form>
                   </div>
                </div>
            
                <div class="col-sm-3"></div>
        </div>
</div>
        <!-- Container (Career Path Section) -->
        <div id="careerpath" class="container-fluid bg-grey text-center">
            <h2>Career Path</h2>
            <h4>What we offer</h4>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-off logo-small"></span>
                    <h4>POWER</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-heart logo-small"></span>
                    <h4>LOVE</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-lock logo-small"></span>
                    <h4>JOB DONE</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
            </div>
            <br><br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-leaf logo-small"></span>
                    <h4>GREEN</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-certificate logo-small"></span>
                    <h4>CERTIFIED</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-wrench logo-small"></span>
                    <h4 style="color:#303030;">HARD WORK</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
            </div>
        </div>




        <!-- Container (Pricing Section) -->
        <div id="pricing" class="container-fluid">
            <div class="text-center">
                <h2>Pricing</h2>
                <h4>Get started with your <strong>30 day free trial</strong> <br/>
                    then choose a payment plan that works for you</h4>
            </div>
            <div class="row slideanim">
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Just Looking</h1>
                        </div>
                        <div class="panel-body">

                            <p>Resume in the Cloud</p>
                            <p>Cover Letter</p>
                            <p>Opportunity Tracking</p>

                        </div>
                        <div class="panel-footer">
                            <h3>$9.99</h3>
                            <h4>3 months</h4>
                            <a href="#signup" class="btn btn-lg" role="button">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Seriously Looking</h1>
                        </div>
                        <div class="panel-body">

                            <p>Resume in the Cloud</p>
                            <p>Cover Letter</p>
                            <p>Opportunity Tracking</p>

                        </div>
                        <div class="panel-footer">
                            <h3>$29.99</h3>
                            <h4>6 months</h4>
                            <a href="#signup" class="btn btn-lg" role="button">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Committed Job Seeker</h1>
                        </div>
                        <div class="panel-body">

                            <p>Resume in the Cloud</p>
                            <p>Cover Letter</p>
                            <p>Opportunity Tracking</p>

                        </div>
                        <div class="panel-footer">
                            <h3>$49.99</h3>
                            <h4>12 months</h4>
                            <a href="#signup" class="btn btn-lg" role="button">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
                </div>
                <div class="col-sm-7 slideanim">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="googleMap" style="height:400px;width:100%;"></div>

        <!-- Add Google Maps -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            var myCenter = new google.maps.LatLng(41.878114, -87.629798);

            function initialize() {
                var mapProp = {
                    center: myCenter,
                    zoom: 12,
                    scrollwheel: false,
                    draggable: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,
                });

                marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Bootstrap Theme Made By <a href="http://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
        </footer>

        <script>
            $(document).ready(function () {
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });

                $(window).scroll(function () {
                    $(".slideanim").each(function () {
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>

    </body>
</html>