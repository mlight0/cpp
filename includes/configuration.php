<?php

// Get the correct database connection string by environment
function database_connection(){

  if (isset($_ENV['CLEARDB_DATABASE_URL'])){
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    return new mysqli($server, $username, $password, $db);

  } else {

    $server = "127.0.0.1";
    $username = "root";
    $password = "GodAlmighty1";
    $db = "careerpathplus";

    return new mysqli($server, $username, $password, $db);

  }
}

// Helper function for easy redirects
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

function isUserAuthenticated(){

  // If no cookie exists then go top logout page
  if(!isset($_COOKIE['userid'])) {
    
    if($x['filename'] <> "index")
    {
      redirect("logout.php");
    }
  } else {
    // Don't do anything...
  }
}

?>
