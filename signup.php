<?php 
    include 'includes/header_simple.php';
?>

<div id="userinformation" class="container-fluid">
<form action="thankyou.php" method="post">

<?php
/* ----------------------------- User Not Logged In (Begin) ----------------------------- */
?>

    <div class="row">
        <h2 class='font-orange'>User Details</h2>
        <div class="col-sm-6">
        
            <div class="form-group">
                <label class="sr-only" for="firstname">First Name:</label>
                <input type="text" class="form-control input-lg col-sm-*" name="firstname" placeholder="First name">
            </div>

            <div class="form-group">
                <label class="sr-only" for="email">Email:</label>
                <input type="email" class="form-control input-lg col-sm-*" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label class="sr-only" for="pwd">Password:</label>
                <input type="password" class="form-control input-lg" name="password" placeholder="Enter password">
            </div>

        </div>
        <div class="col-sm-6">

            <div class="form-group">
                <input type="text" class="form-control input-lg col-sm-*" name="lastname" placeholder="Last name">
            </div>

            <div class="form-group">
                <label class="sr-only" for="phone">Phone:</label>
                <input type="text" class="form-control input-lg col-sm-*" name="phone" placeholder="Phone">
            </div>

            <div class="form-group">
                <input type="password" class="form-control input-lg" name="reenterpassword" placeholder="Re-enter password">
            </div>
            
        </div>
    </div>

 <?php
/* ----------------------------- User Not Logged In (End) ----------------------------- */
?>
</div>

<!--
<div id="pricing" class="container-fluid bg-grey">
    <div>
        <h2>Pricing</h2>
        <h4>Get started with your <strong>30 day free trial</strong>
            then choose a payment plan that works for you</h4>
    </div>
    <div class="row">
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Just<br> Looking</h1>
                </div>
                <div class="panel-body">

                    <p>Resume in the Cloud</p>
                    <p>Cover Letter</p>
                    <p>Opportunity Tracking</p>

                </div>
                <div class="panel-footer">
                    <h3>$9.99</h3>
                    <h4>3 months</h4>
                    <a href="#signup" class="btn btn-lg" role="button">Select</a>
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
                    <a href="#signup" class="btn btn-lg" role="button">Select</a>
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
                    <a href="#signup" class="btn btn-lg" role="button">Select</a>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<div id="selectplan" class="container-fluid bg-grey">
    <div class="row">
            <div class="col-sm-12">
                <h2 class='font-orange'>Select a Plan</h2>   

                <div class="form-group">
                <label for="sel1">Select plan:</label>
                <select class="form-control" id="sel1">
                    <option>30 days FREE then $9.99 per month</option>
                    <option>3 months - $24.99</option>
                    <option>6 months - $49.99</option>
                    <option>12 months - $89.00</option>
                </select>
                </div>
            </div>
    </div>
</div>
<div id="payment" class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h2 class='font-orange'>Billing Information</h2>   
            
            <div class="form-group">
                <label class="sr-only" for="email">Street address:</label>
                <input type="streetaddress" class="form-control input-lg col-sm-*" name="streetaddress" placeholder="Street address">
            </div>

        </div>
        <div class="col-sm-6">

                <div class="form-group">
                    <input type="text" class="form-control input-lg col-sm-*" name="city" placeholder="City">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control input-lg col-sm-*" name="country" placeholder="Country (make drop down)">
                </div>

              

        </div>
        <div class="col-sm-6">

                <div class="form-group">
                    <input type="text" class="form-control input-lg col-sm-*" name="zip" placeholder="ZIP / Postal code">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control input-lg col-sm-*" name="state" placeholder="State">
                </div>

        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <input type="password" class="form-control input-lg col-sm-*" name="email" placeholder="Card number">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                    <input type="text" class="form-control input-lg col-sm-*" name="month" placeholder="Month (MM)">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                    <input type="text" class="form-control input-lg col-sm-*" name="year" placeholder="Year (YY)">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                    <input type="text" class="form-control input-lg col-sm-*" name="ccv" placeholder="CCV">
                </div>
        </div>

        <div class="col-sm-12 text-center">
        <br>
            <div class="form-group">
                
                <button type="submit" class="btn btn-lg btn-warning">Subscribe!</button><br>
                <br>
                By clicking "Subscribe" you are agreeing to the <a>Terms of Service</a> and <a>Privacy Policy</a>
            </div>

        </div>
    </div> 
</div>
</form>

<br>

<?php
    include 'includes/footer_simple.php'
?>