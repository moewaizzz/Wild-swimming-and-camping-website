<?php

    $connection = mysqli_connect("localhost", "root", "","gwcsdb");
    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }
	// mysql_connect("localhost","root","");
	// mysql_select_db("gwcsdb");

	if (!$connection) {
    die('Could not connect: ' . mysqli_error($con));
}
	?>