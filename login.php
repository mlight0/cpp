<?php

include 'includes/header_simple.php';

?>

        <div class="container-fluid">
            <div class="row ">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
              
                    <h2>Login</h2>
                    <p>
                      <div class="panel panel-default">

                        <div class="panel-body">
                                <form action="account/user_authentication.php" method="post">
                                    <div class="form-group">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control input-lg col-sm-*" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                    <label for="pwd">Password:</label>
                                      <input type="password" class="form-control input-lg" name="password" placeholder="Enter password">
                                    </div>
                                    <button type="submit" class="btn btn-default  input-lg">Login</button>
                                </form>
                        </div>
                        </div>
                    </p>
</div>
<div class="col-sm-4"></div>
            </div> 
        </div>

<?php
 
 include 'includes/footer_simple.php';

 ?>