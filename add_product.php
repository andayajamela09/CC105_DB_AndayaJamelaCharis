<?php
include 'db_connect.php';

$name = $_POST['productName'];
$qty = $_POST['productQty'];
$price = $_POST['productPrice'];

$sql = "INSERT INTO products (name, quantity, price) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sid", $name, $qty, $price);

if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
