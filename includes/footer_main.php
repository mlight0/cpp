</div>
<!-- END MAIN COONTAINER -->

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