<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_SESSION['username'];
    clearCart($user);

    header('Location: OrderConfirmation.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}

function clearCart($user) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "Mingle";
    $con = mysqli_connect($servername, $username, $password, $dbName);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $clearCartStmt = $con->prepare("DELETE FROM Cart WHERE Username = ?");
    $clearCartStmt->bind_param("s", $user);
    $clearCartStmt->execute();
    $clearCartStmt->close();
    mysqli_close($con);
}
?>
