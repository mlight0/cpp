<?php

echo "Hello ";
?>
World! <br/><br/> 

<?php echo date("h:i:sa"); ?> <br/><br/>

Welcome to Career Path Plus!


<br/><br/>

<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT user_id, user_first_name, user_last_name FROM tbl_users";
$result = $conn->query($sql);
?>

<table border=1>
    <tr>
        <td><b>User ID<b></td>
        <td><b>Name<b></td>
    </tr>





<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>

    <tr>
        <td><?php echo $row["user_id"]; ?></td>
        <td><?php echo $row["user_first_name"]  . " " .  $row["user_last_name"]; ?></td>
    </tr>
<?php 
      //  echo "user_id: " . . " - Name: " . $row["user_first_name"]. " " . $row["user_last_name"]. "<br>";

    }
} else {
    echo "0 results";
}
?>
</table>
<?php 
$conn->close();
?>