<! DOCTYPE html>
<html>
    <body>
        <?php //Code taken from O'Sullivan (2016) COMP3391 PHP Connect Seminar Worksheet
        
        // set up the variables
        $db_hostname = '172.16.11.22:3306'
        $db_username = 'west1_Admin';
        $db_password = 'Dog123';
        $db_database = 'west1_15_birdspottinguk';
        
        // Connect to server and check connection
        $dbconnect = mysqli_connect("$db_hostname", "$db_username", "$db_password");
        if (!$dbconnect)
        {
            die("Unable to connect to host: " . mysqli_connect_error());
        }
        
     
        
        ?>
    </body>
</html>