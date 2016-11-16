<?php

// Database connection string based on local or Heroku enviroment.
function pg_connection_string_from_database_url() {
    
    if (isset($_ENV['DATABASE_URL'])){ // check to see if the DATABASE_URL environmental variable i set.

      //Extract and generation the server DB connection string.
      extract(parse_url($_ENV['DATABASE_URL']));
      return "host=$host  dbname=" . substr($path, 1) ." user=$user password=$pass .";

    } else {

       // Return the local DB connection string.  
       return "host=localhost port=5432 dbname=careerpathplus user=postgres password=postgres";        
       
    }
}



?>
