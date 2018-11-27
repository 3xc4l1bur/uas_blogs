<?php

	$engi = 'mysql';
	$host = "localhost";
	$dbse = 'blogs_34';
	$user = '3x1l3';
	$pass = "Exile256";

	$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host,$user,$pass);

?>