<?php
include '../includes/configuration.php';


// Connect to database
$conn = database_connection();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Authenticate User: Pass email address and password
try{
    // Execute stored procedure
    $result = mysqli_query($conn, "CALL sp_AuthenticateUser('" . $_POST["email"] . "','" . $_POST["password"] . "');") or die("Query fail: " . mysqli_error());
}
catch (exception $e) {
    echo $e;
}
// Close DB connection
$conn->close();

// Verify authentication
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        $UserAuthenticated =  $row["Authenticated"];
    }
}

// Redirect based on authentication
if ($UserAuthenticated > "0") {
    
    // Set user cookie with successful authentication
    $temp_userid = "1";
    setcookie("userid", $temp_userid, time() + (86400 * 30), "/"); // 86400 = 1 day

    redirect("../careerpath.php");
    
} else {
    redirect("../index.php?error=login_failed");
}

?>