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
                        <li><a href="#opportunities">OPPORTUNITIES</a></li>
                        <li><a href="#resume">RESUME</a></li>
                        <li><a href="#coverletter">COVER LETTER</a></li>
                        <li><a href="#account">ACCOUNT</a></li>
                        <li><a href="index.php" class="btn link-btn-wht" role="button">Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
        <div id="opportunities" class="container-fluid">
            <div class="row ">

                    <h2 class='font-orange'>Welcome to Career Path</h2>
                    <p>
                        Whether you are a new grad or a seasoned professional, if you're in the job market you're likely overlooking one of the most critical aspects of turning an opportunity into a job offer.
                        It's the journey. Career Path Plus is designed to walk you though a proven methodology to take you from applicant to employed. 
                    </p>

            </div> 
        </div>

        
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