<?php

session_start();

include '../dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

// echo $first."<br/>";
// echo $last."<br/>";
// echo $uid."<br/>";
// echo $pwd."<br/>";
// za test

$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
// obrati paznju na znake navodnika jer u ovome slucaju ako bi isto stavili " bilo bi problema jer bi ponistili prve znaci OBAVEZNO '
$result = mysqli_query($conn, $sql);

header("Location: ../index.php");
