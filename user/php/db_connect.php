<?php 

$link = mysqli_connect("localhost", "root", "", "input");

if (!$link) {
	echo "Error : Unable to connect to MYSQL." . PHP_EOL;
	echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error:" . mysqli_connect_error() . PHP_EOL;
	# code...
}
/*echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);*/

?>