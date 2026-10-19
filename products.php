<?php
declare(strict_types=1);

// Step 1: require the database connection (includes/database.php)

// Step 3: write the SELECT from two tables (FROM products, categories WHERE the IDs match), then query() and fetchAll(PDO::FETCH_ASSOC)

// Step 5: turn each row into a Product with Product::fromRow()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Guitar Shop</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        table { border-collapse: collapse; }
        th, td { border: 1px solid #adb5bd; padding: 0.4rem 0.8rem; text-align: left; }
        th { background: #343a40; color: #fff; }
    </style>
</head>
<body>
    <h1>Guitar Shop</h1>

    <table>
        <thead>
            <tr><th>Code</th><th>Product</th><th>Category</th><th>Price</th></tr>
        </thead>
        <tbody>
            <!-- Step 3: one <tr> for each product, every value escaped with htmlspecialchars() -->
        </tbody>
    </table>
</body>
</html>
