<?php
require_once('connect.php');

$userID = $_GET['id'];

$querry = "SELECT * FROM user WHERE id = '$userID'";
$sql = mysqli_query($db_connect, $querry);

while ($fetchData = $sql->fetch_assoc()) {
	if ($fetchData != null) {
		$result = $fetchData;
	}
}

echo json_encode($result);