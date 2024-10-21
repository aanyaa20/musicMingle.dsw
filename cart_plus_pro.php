<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $productId = $_POST['id'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "Mingle";
    $con = mysqli_connect($servername, $username, $password, $dbName);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $stmt = $con->prepare("UPDATE Cart SET Quantity = Quantity + 1 WHERE Username = ? AND Product_id = ?");
    $stmt->bind_param("si", $user, $productId);
    $stmt->execute();
    mysqli_close($con);
}
?>
