<?php

    $link = mysqli_connect("shareddb-q.hosting.stackcp.net:3306
","amitsingh","root1234","secretdiary-313137dda4");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>