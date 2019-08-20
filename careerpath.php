<?php 
    include 'includes/header_career.php';
?>

        <div id="opportunities" class="container-fluid">
            <div class="row ">

                    <h2 class='font-orange'>Welcome to Career Path</h2>
                    <p>
                        Whether you are a new grad or a seasoned professional, if you're in the job market you're likely overlooking one of the most critical aspects of turning an opportunity into a job offer.
                        It's the journey. Career Path Plus is designed to walk you though a proven methodology to take you from applicant to employed.  
                    </p>

<p>

<table class="table table-striped">
    <thead>
        <tr>
            <td>Company</td>
            <td>Position</td>
            <td>Salary</td>
            <td>Hourly Rate</td>
            <td>Job Description</td>
            <td>URL</td>
            <td>Status</td>
            <td>Created Date</td>
            <td>Updated Date</td>
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
            <td>  <?php echo $row["opp_job_description"]; ?></td>
            <td>  <?php echo $row["opp_url"]; ?></td>
            <td>  <?php echo $row["opp_status_value"]; ?></td>
            <td>  <?php echo $row["opp_createddate"]; ?></td>
            <td>  <?php echo $row["opp_updateddate"]; ?></td>
</tr>
<tr>
            <td colspan="9">
            <b>OPPOTRUNITIY NOTES</b>&nbsp;
            <button data-toggle="collapse" data-target="#notes<?php echo $row["opp_id"]?>">View</button>

            <div id="notes<?php echo $row["opp_id"]?>" class="collapse">
                <table class="table table-condensed">

<?php

// Connect to database
$conn2 = database_connection();

// Authenticate User: Pass email address and password
try{
    // Execute stored procedure
    $result2 = mysqli_query($conn2, "CALL sp_GetNotesByUserID(". $userid . ", ". $row["opp_id"] .")") or die("Query fail: " . mysqli_error());
}
catch (exception $e) {
    echo $e;
}

// Close DB connection
$conn2->close();

if($result2->num_rows > 0){
    while ($row2 = $result2->fetch_assoc()) {
?>     

                    <tr>
                        <td><?php echo $row2["note_createddate"]; ?></td>
                        <td><?php echo $row2["note_text"]; ?></td>
                    </tr>
<?php
    }
} else {
?>
    <tr><td colspan="2">No notes yet...</td></tr>
<?php 
}
?>
                </table>
</div>
            </td>
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