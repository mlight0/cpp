<?php
print "Hello ";
?>
World! <br/> 

Welcome to Career Path Plus!


<br/><br/>


<?php

$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Herrera\Pdo\PdoServiceProvider(),
               array(
                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
                   'pdo.username' => $dbopts["user"],
                   'pdo.password' => $dbopts["pass"]
               )
);

$app->get('/db/', function() use($app) {
  $st = $app['pdo']->prepare('SELECT user_first_name FROM tbl_users');
  $st->execute();

  $names = array();
  while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
    $app['monolog']->addDebug('Row ' . $row['user_first_name']);
    $names[] = $row;
  }

  return $app['twig']->render('database.twig', array(
    'user_first_name' => $names
  ));
});
?>

<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

echo $server;

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