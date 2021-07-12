<?php
        $dbhost = "localhost";
        $dbuser = "hero";
        $dbpass = "1234";
        $db = "smartmethodtasks";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);  

        $select_db = mysqli_select_db($conn,  $db);
		if (!$select_db){
		die("Database Selection Failed" . mysqli_error($conn));
    }

        $movemnet = $_GET['movement'];
        
        $query = " UPDATE `movement` SET `movement`= '$movemnet' ";
        $result = mysqli_query( $conn, $query)
        or die(mysqli_error( $conn));
        $conn->close();

?>