<?php
//for database coonection- servername, username-password-database name(usually same as username on ecowebhosting)
    $link = mysqli_connect("shareddb-k.hosting.stackcp.net", "secretdi-3937d14a", "24vmob8i4p", "secretdi-3937d14a");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>