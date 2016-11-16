<?php
include '../includes/configuration.php';




## Authenticate User

# Establish the connection. 
$pg_conn = pg_connect(pg_connection_string_from_database_url());

$useremail = filter_input(INPUT_POST, "email");
$userpassword = filter_input(INPUT_POST, "password");
       
$result = pg_query($pg_conn, "SELECT sp_user_authenticate('$useremail', '$userpassword');");

$val = pg_fetch_result($result, 0, 0);

/*
while ($row = pg_fetch_assoc($result))
{
    
    
    echo $row[""];
    
        /*while($row)
        {
           if($row[0] == 0)
           {
               echo "You're not welcome here.\n";
           }
           else
           {
               echo "Welcome!\n";
           }
            
        }
}*/
/*else
{
    echo "No results.";
}
*/

if ($val == 0) {
    
    print("You are not authorized. \n");
  
} else {
  
  while ($row = pg_fetch_row($result)) { 
      
      print("Welcome! \n");
            
  }
}
# Get the variables from the form.

echo "<br><br> Email: " . $useremail . "<br>";
echo "Password: " . $userpassword . "<br>";

?>