<?php
include 'db_connect.php';

$id = $_POST['id'];
$name = $_POST['productName'];
$qty = $_POST['productQty'];
$price = $_POST['productPrice'];

$sql = "UPDATE products SET name=?, quantity=?, price=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sidi", $name, $qty, $price, $id);

if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
