<?php 
    include 'includes/header_career.php';


    // Connect to database
    $conn = database_connection();

    // Authenticate User: Pass email address and password
    try{
        // Execute stored procedure
        $result = mysqli_query($conn, "CALL sp_GetOpportunitiesByUserID(". $userid .")") or die("Query fail: " . mysqli_error());
    }
    catch (exception $e) {
        echo $e;
    }
    // Close DB connection
    $conn->close();
?>

        <div id="opportunities" class="container-fluid">
            <div class="row ">

                    <h2 class='font-orange'>Career Path</h2>
                   
<p>

<table class="table table-striped">
    <thead>
        <tr>
            <td>Company</td>
            <td>Position</td>
            <td>Salary</td>
            <td>Hourly Rate</td>
            <td>URL</td>
            <td>Status</td>
            <td>Created Date</td>
            <td>Updated Date</td>
            <td></td>
        </tr>
    </thead>

<?php

// Iterate opportunities

if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
?>        
    <tr>
            <td>  <?php echo $row["opp_company"]; ?></td>
            <td>  <?php echo $row["opp_position"]; ?></td>
            <td>  <?php echo $row["opp_salary"]; ?></td>
            <td>  <?php echo $row["opp_hourly_rate"]; ?></td>
            <td>  <?php echo $row["opp_url"]; ?></td>
            <td>  <?php echo $row["opp_status_value"]; ?></td>
            <td>  <?php echo $row["opp_createddate"]; ?></td>
            <td>  <?php echo $row["opp_updateddate"]; ?></td>
            <td> <a href="opportunitydetail.php?oppid=<?php echo $row["opp_id"]; ?>">Select</a></td>
</tr>

<?php
    }
} else {
?>
<tr><td colspan="9">No data</td></tr>
<?php
}
?>
</table>

</p>



            </div> 
        </div>

<?php
    include 'includes/footer_simple.php'
?>