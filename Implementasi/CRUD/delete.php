<?php
include_once("config.php");

$npm = $_GET['npm'];

$query = mysqli_query($conn, "DELETE FROM biodata WHERE npm=$npm");
header("Location:index.php");
?>