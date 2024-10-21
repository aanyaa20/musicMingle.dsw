<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dB = "Mingle";
$con = mysqli_connect($servername, $username, $password, $dB);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$use = $_POST['user'];
$pid = $_POST['id'];

$sql = "DELETE from Cart where Username='$use' and Product_id= $pid";

if (mysqli_query($con, $sql)) {
    echo 'Product removed successfully';
} else {
    echo 'Error removing product: ' . mysqli_error($con);
}

mysqli_close($con);
?>
