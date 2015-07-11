<?php


$link = mysqli_connect("localhost", "my_user", "my_password", "my_db");

if (mysqli_connect_error()) {

	die("Could not connect to database");
} 

//$query = "insert into `users`(`name`, `email`, `password`) values('nitin', 'nitin@gmail.com', 'fun123')";
//mysqli_query($link, $query);

$query = "select * from users";

if($result = mysqli_query($link, $query)) {

	while($row = mysqli_fetch_array($result)) {

	print_r($row);

}

} else {

	echo "Noooooo  :(";

}

?>
