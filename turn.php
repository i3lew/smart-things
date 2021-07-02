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




        $query =" SELECT  `status` FROM `محركات` ";
        $result = mysqli_query( $conn, $query)
        or die(mysqli_error( $conn));
        $row = $result->fetch_assoc();
        $status = $row['status'];
        if( $status == "off"){
        $query = " UPDATE `محركات` SET `status`= 'on' ";
        $result = mysqli_query( $conn, $query)
        or die(mysqli_error( $conn));
        }else{

            $query = " UPDATE `محركات` SET `status`= 'off'";
            $result = mysqli_query( $conn, $query)
            or die(mysqli_error( $conn));

        }


        $conn->close();

?>