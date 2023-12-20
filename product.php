<!-- afisarea produsului pe care facem click din slider -->
<?php
    require_once ("./config.php");

    $sql = "SELECT * FROM products";
    $result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
            include "./styles.css"
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
        <div class="catalog">
            <?php
                if ($result -> num_rows > 0) {
                    while ($row = $result -> fetch_assoc()) {
                        echo "<div class='listing'>
                            <img src=$row[url]>
                            <h2>$row[title]</h1>
                            <p>$row[price]</p>    
                        </div>";
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>