<?php

include 'includes/header_career.php';

    // Get oppid from URL
    $oppid = $_GET['oppid'];

    // Connect to database
    $conn = database_connection();

    // Get Opportunity data by user ID and opportunity ID. 
    try{
        // Execute stored procedure
        $result = mysqli_query($conn, "CALL sp_GetOpportunitiesByOppID(". $userid .", ". $oppid .")") or die("Query fail: " . mysqli_error());
    }
    catch (exception $e) {
        echo $e;
    }
    // Close DB connection
    $conn->close();

?>
        <div class="container-fluid">
            <div class="row ">
            <div class="col-sm-12">

            <a href="careerpath.php" class="btn btn-info" role="button"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
        </div>
            <?php
              // Iterate opportunit data

              if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {

                  $opp_status_id = $row["opp_status_id"];

            ?>  
              <div class="col-sm-8">
                <h1 class='font-orange'><?php echo $row["opp_position"]; ?></h1>
                <div style="padding-top: 0px;"><?php echo $row["opp_company"]; ?></div>
              </div>

              <div class="col-sm-4">
                <a class="btn btn-info" role="button" data-toggle="modal" data-target="#oppupdate"><span class="glyphicon glyphicon-plus"></span> Log Update</a>
              </div>

              <?php include 'modals/opportunityupdate.php'; ?>

              <div class="col-sm-12" style="background-color: #f1f1f1;">

            <small>
              <div class="col-sm-8">
                Annual Salary: <?php echo $row["opp_salary"]; ?><br>
                Hourly Rate: <?php echo $row["opp_hourly_rate"]; ?><br>
                Opprtunity Website:&nbsp;<a href='<?php echo $row["opp_url"]; ?>' target="_new"> <span class="glyphicon glyphicon-new-window"></span> Launch</a>
              </div>
              <div class="col-sm-4">
                Status: <?php echo $row["opp_status_value"]; ?><br>
                Created: <?php echo $row["opp_createddate"]; ?><br>
                Last Updated: <?php echo $row["opp_updateddate"]; ?>
              </div>    
                </small>
              </div>
              
              <div class="col-sm-12">&nbsp;</div>
              <div class="col-sm-8">
                <h4>Description</h4>
                <?php echo $row["opp_job_description"]; ?>
              </div>
            <?php
                }
            } else {
            ?>
            No data here... 
            <?php
            }


            // Iterate Notes
            // Authenticate User: Pass email address and password

    // Connect to database
    $conn = database_connection();
            try{
              // Execute stored procedure
              $result2 = mysqli_query($conn, "CALL sp_GetNotesByUserID(". $userid .", ". $oppid .")") or die("Query fail: " . mysqli_error());
            }
            catch (exception $e) {
              echo $e;
            }
            // Close DB connection
            $conn->close();
?>
            <div class="col-sm-4">
                <h4>Notes</h4>



          </div>
<?php
            
              // Iterate opportunities

              if($result2->num_rows > 0){
                while ($row = $result2->fetch_assoc()) {
            ?>  
                        <div class="col-sm-4">

                  <b>
                <?php 
                    $d = strtotime($row["note_createddate"]);
                    echo date("m-d-y h:i:sa", $d); 
                  ?>
                  </b>
                  
                  <?php echo $row["note_text"]; ?>
                 <!-- <?php echo $row["note_id"]; ?>-->


                </div>
              <?php
            }
            } else {
            ?>
              <div class="col-sm-4">
                No notes yet... 
              </div>

            <?php
            }
            ?>
              </div>
            </div> 
        </div>

<?php
 
 include 'includes/footer_simple.php';

 ?>