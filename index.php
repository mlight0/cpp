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
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">THE JOURNEY<span class="caret"></span></a>
                            
                            <ul class="dropdown-menu">
                                <li><a href="#signup">GET STARTED</a></li>
                                <li><a href="#about">ABOUT</a></li>
                                <li><a href="#careerpath">CAREER PATH</a></li>
                                <li><a href="#pricing">PRICING</a></li>
                                <li><a href="#contact">CONTACT</a></li> 
                              </ul>
                            </li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <!--<li><a href="#careerpath">CAREER PATH</a></li>
                            <li><a href="#pricing">PRICING</a></li>
                            <li><a href="#contact">CONTACT</a></li>
                            <li><a href="#signup" class="btn link-btn" role="button">Sign Up</a></li>
                            <li><a href="careerpath.php" class="btn link-btn-wht" role="button">Login</a></li>-->

                            <li>
                                <form class="form-inline" action="account/user_authentication.php">
                                    <div class="form-group">
                                      <input type="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                    </div>
                                    <button type="submit" class="btn btn-default">Login</button>
                                </form>
                            </li> 
                    </ul>
                </div>
            </div>
        </nav>
 

        <div id='signup' class="container-fluid homebgimage">
            <div class="row">
            <br>
                <div class="col-sm-2"></div>

                <div class="col-sm-4">
                    <h2 class='font-orange'>The journey to your next job starts now.</h2>
                   
                    <h4 style="color:#fff;">
                        In today's job market there is no time to waste. With the flood of competing candidates and the rise online job boards and recruiting web sites are all very promising, 
                        but you have to ask yourself, <i>"Why haven't I landed my next job yet?"</i>
                    </h4>
                        
                    <p style="color:#fff;">
                        Whether you are a new grad or a seasoned professional, if you're in the job market you're likely overlooking one of the most critical aspects of turning an opportunity into a job offer.
                        It's the journey. Career Path Plus is designed to walk you though a proven methodology to take you from applicant to employed. 
                    </p>
                    
                    <a href="#about" class="btn btn-lg btn-org" role="button">Learn more</a>
                    
                </div>
                
                <div class="col-sm-4">
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
                            <button type="submit" class="btn btn-default btn-lg btn-org" >Sign me up!</button>
                            </div>
                        </form>
                        
                   </div>
                </div>
                
                <div class="col-sm-2"></div>
                
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

        
        <!-- Container (Career Path Section) -->
        <div id="careerpath" class="container-fluid text-center">
            <h2>Career Path</h2>
            <h4>What we offer</h4>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-th-list logo-small"></span>
                    <h4>Opportunity Pipeline</h4>
                    <p>Track your job opportunities from application to employment. Store critical information so you can easily refer back if you get <i><strong>"The call"</strong></i>.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-file logo-small"></span>
                    <h4>Resume Online</h4>
                    <p>When was the last time you tuned up your resume? Keep your resume up-to-date and accessible in the cloud so you get get it and send it when you need it the most.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-envelope logo-small"></span>
                    <h4>Cover Letter Online</h4>
                    <p>Use our cover letter template and keep a copy for each job opportunity. Yes, having a cover letter will give you the edge you need to look professional and stay top of mind for your next prospective employer.</p>
                </div>
            </div>
            <br><br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-send logo-small"></span>
                    <h4>Follow Up Letter?</h4>
                    <p>Yes, if you're not using one you're losing out. We've got you covered with templates and insight on how and why to use a follow up letter.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-refresh logo-small"></span>
                    <h4>Proven Process</h4>
                    <p>One definition of insanity is doing the same thing and expecting a different result. If what you're doing isn't working it's time to use a proven process to see the results you're looking for.</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-ok-circle logo-small"></span>
                    <h4 style="color:#303030;">Get Started</h4>
                    <p>There is one thing keeping you from taking your first step to getting your next job. You have to <a href='#signup'>Sign Up!</a></p>
                </div>
            </div>
        </div>




        <!-- Container (Pricing Section) -->
        <div id="pricing" class="container-fluid bg-grey">
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
        <div id="contact" class="container-fluid" style="background: #32363f; color: #fff;">
            <div class="row">
                <div class="col-sm-4">
                    <h4 style="color: #d4d5d7;">About</h4>
                    <ul>
                        <li><a href="#about" style="color:#fff;">About</a></li>
                        <li><a href="#pricing" style="color:#fff;">Pricing</a></li>
                        <li><a href="#careerpath" style="color:#fff;">Career Path</a></li>
                        <li><a href="#careerpath" style="color:#fff;">Terms of Service</a></li>
                        <li><a href="#careerpath" style="color:#fff;">Privacy Policy</a></li>
                    </ul>
                </div>
              
                <div class="col-sm-4">
                    <h4 style="color: #d4d5d7;">Contact</h4>
                    
                    <div class="row">
                      <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                      </div>
                      <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                      </div>
                    </div>

                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                    <br>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <button class="btn pull-right btn-org" type="submit">Send</button>
                      </div>
                    </div>
   
                </div>
                <div class="col-sm-4">
                    <h4 style="color: #d4d5d7;">Connect</h4>
                    
                        <a href="http://www.linkedin.com" target="_blank"><img src="images/FooterIcons_LinkedIn.jpg" class="img-responsive"></a>
                        <a href="http://www.twitter.com" target="_blank"><img src="images/FooterIcons_Twitter.jpg" class="img-responsive"></a>
                        <a href="http://www.youtube.com" target="_blank"><img src="images/FooterIcons_Youtube.jpg" class="img-responsive"></a>
                   
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center" style="background: #222; color: #fff;">
            <div class="row">
                <div class="col-sm-4">
                    <small style="color:#999999;">© Career Path Plus. All rights reserved.</small>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
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