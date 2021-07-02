<?php
        $dbhost = "localhost";
        $dbuser = "hero";
        $dbpass = "1234";
        $db = "smartmethodtasks";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);  

        $select_db = mysqli_select_db($conn,  $db);

		if (!$select_db){
		die("Database Selection Failed" . mysqli_error($conn));}

        $engine1 = $_GET['egnine1'];
        $engine2 = $_GET['egnine2'];
        $engine3 = $_GET['egnine3'];
        $engine4 = $_GET['egnine4'];
        $engine5 = $_GET['egnine5'];
        $engine6 = $_GET['egnine6'];


        //$query =" SELECT `محرك1`, `محرك2`, `محرك3`, `محرك4`, `محرك5`, `محرك6`, `status` FROM `محركات` ";
        //$result = mysqli_query( $conn, $query)
        //or die(mysqli_error( $conn));
         //$row = $result->fetch_assoc();
         //echo''.$row['محرك6']."also".$row['محرك1'];
        $query = " UPDATE `محركات` SET `محرك1`= $engine1,`محرك2`= $engine2,`محرك3`= $engine3,`محرك4`=$engine4,`محرك5`= $engine5,`محرك6`=$engine6";
        $result = mysqli_query( $conn, $query)
        or die(mysqli_error( $conn));
        $conn->close();

?>