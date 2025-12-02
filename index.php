<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inventory Management System</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>  
    <h1>Inventory Management System</h1>
  </header>

  <main>
    <!-- ADD PRODUCT FORM -->
    <section class="form-section">
      <h2>Add New Product</h2>
      <form id="addProductForm" action="add_product.php" method="POST">
        <input type="text" name="productName" placeholder="Product Name" required />
        <input type="number" name="productQty" placeholder="Quantity" required />
        <input type="number" name="productPrice" placeholder="Price" step="0.01" required />
        <button type="submit">Add Product</button>
      </form>
    </section>

    <!-- PRODUCT LIST TABLE -->
    <section class="table-section">
      <h2>Product List</h2>
      <table id="productTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM products";
          $result = $conn->query($sql);

          if ($result && $result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>".htmlspecialchars($row['id'])."</td>
                          <td>".htmlspecialchars($row['name'])."</td>
                          <td>".htmlspecialchars($row['quantity'])."</td>
                          <td>".htmlspecialchars($row['price'])."</td>
                          <td>
                            <!-- EDIT FORM -->
                            <form action='edit_product.php' method='POST' style='display:inline-block;'>
                              <input type='hidden' name='id' value='".htmlspecialchars($row['id'])."'>
                              <input type='text' name='productName' value='".htmlspecialchars($row['name'])."' required>
                              <input type='number' name='productQty' value='".htmlspecialchars($row['quantity'])."' required>
                              <input type='number' name='productPrice' value='".htmlspecialchars($row['price'])."' step='0.01' required>
                              <button type='submit'>Update</button>
                            </form>
                            <!-- DELETE FORM -->
                            <form action='delete_product.php' method='POST' style='display:inline-block;'>
                              <input type='hidden' name='id' value='".htmlspecialchars($row['id'])."'>
                              <button type='submit' onclick=\"return confirm('Delete this product?')\">Delete</button>
                            </form>
                          </td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='5'>No products found</td></tr>";
          }

          $conn->close();
          ?>
        </tbody>
      </table>
    </section>
  </main>

  <footer>
    <p>© 2025 Inventory System | Created in VS Code</p>
  </footer>
</body>
</html>
