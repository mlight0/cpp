<?php
print "Hello ";
?>
World! <br/> 

Welcome to Career Path Plus!


<br/><br/>

<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

echo "test 1<br><br>";

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "test 2<br><br>";

$sql = "SELECT user_id, user_first_name, user_last_name FROM tbl_users";
$result = $conn->query($sql);
echo "test 3<br><br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "user_id: " . $row["user_id"]. " - Name: " . $row["user_first_name"]. " " . $row["user_last_name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>