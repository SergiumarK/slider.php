<!-- info despre produsul pe care am dat click din slider/index.php -->
<?php
    $id = $_GET["id"];
    echo $id;

    require_once "./config.php";

    $sql = "SELECT * FROM products WHERE product_id = $id";

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
            <a href="cms.php">Home</a>
        </nav>
    </header> 
    <main>
        
            <?php
                if ($result = $conn->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='container'>
                            <img src=$row[url]>
                            <div>
                                <h2>$row[title]</h1>
                                <p>$row[price] MDL</p>  
                            </div>  
                        </div>";
                    }
                }
            ?>
        
    </main>
</body>
</html>