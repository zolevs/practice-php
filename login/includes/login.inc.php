<?php

session_start();

include '../dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd' ";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
	echo "Your username or password error";
} else {
	// echo "You are logged in!";
	$_SESSION['id'] = $row['id'];
	// naziv sesije je proizvoljan ovde je eto tako stavljen id, bezveze
}

header("Location: ../index.php");
