<?php

include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd' ";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
	echo "Your username or password error";
} else {
	echo "You are logged in!";
}

// header("Location: index.php");
