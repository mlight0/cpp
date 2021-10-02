<?php

// Connect to database
$conn = database_connection();

    try{
        // Execute stored procedure
        $resultstatuses = mysqli_query($conn, "CALL sp_GetOpportunityStatuses()") or die("Query fail: " . mysqli_error());
    }
    catch (exception $e) {
        echo $e;
    }
    // Close DB connection
    $conn->close();

?>


<div id="oppupdate" class="modal fade" role="dialog" style="margin-top: 50px;">
<form action="opportunityupdatesave.php" >
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Log Opportunity Update</h4>
        </div>

        <div class="modal-body">
            <p>

        <div class="form-group">
  
        <label for="sel1">Opportunity Status:</label>
        <select class="form-control" id="sel1">

        <?php
              // Iterate status
              if($resultstatuses->num_rows > 0){

                while ($rowStatus = $resultstatuses->fetch_assoc()) {

                    if($rowStatus["opp_status_id"] == $opp_status_id){
                        $selected = "SELECTED";
                    }
                    else{
                        $selected = "";
                    }
            ?>  
            <option value="<?php echo $rowStatus["opp_status_id"];?>" <?php echo $selected; ?> ><?php echo $rowStatus["opp_status_value"]; ?></option>
            
                <?php 

                $selected = "";    

                }
            }?>
        </select>
        </div>

            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>

            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
        </div>
        </div>

    </div>
</div>
