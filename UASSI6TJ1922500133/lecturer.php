<?php
include 'koneksi.php';
$query = "SELECT * from lecturer";
$result = $con->query($query);

// Fetch all
$data_lecturer = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($data_lecturer);
?>