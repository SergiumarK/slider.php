<?php
    require_once "./config.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_POST["type"] === "product-create") {
            $title = $_POST["title"];
            $price = $_POST["price"];
            $url = $_POST["url"];

            $sql = "INSERT INTO products(title, price, url) VALUES ('$title', $price, '$url')";
            $conn->query($sql);
            header("Location: ./cms.php");
        }

        if ($_POST["type"] === "slide-create") {
            $productId = $_POST["product_id"];
            $url = $_POST["url"];
            $sql = "INSERT INTO slides(url, product_id) VALUES ('$url', $productId)";
            $conn->query($sql);
            header("Location: ./cms.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <style>
        <?php
            include "styles.css";
        ?>
    </style>
</head>
<body>
    <header>
        <h1>web</h1>
        <nav>
            <a href="index.php">Products</a>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
        <form class="product-create" action="" method="post">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="price" step="0.01" placeholder="Price">
            <input type="text" name="url" placeholder="URL">
            <button name="type" value="product-create">Create</button>
        </form>
        <form class="slider-product-create" action="" method="post">
            <select name="product_id">
                <?php
                    $sql = "SELECT product_id, title FROM products";
                    $results = $conn->query($sql);
                    
                    if ($results->num_rows > 0) {
                        while ($row = $results->fetch_assoc()) {
                            echo "<option value='$row[product_id]'>$row[title]</option>";
                        }
                    }
                ?>
            </select>
            <input type="text" name="url" placeholder="URL">
            <button name="type" value="slide-create">Create</button>
        </form>
    </main>
</body>
</html>