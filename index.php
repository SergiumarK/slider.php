<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        <?php
            include "styles.css";
        ?>
    </style>
    <script defer src="script.js"></script>
</head>
<body>
    <div class="slider-body">
        <div id="slider">
            <div class="slider-line">
                <?php
                    $sql = "SELECT * FROM slides";
                    $results = $conn->query($sql);
                    if ($results->num_rows > 0) {
                        while ($row = $results->fetch_assoc()) {
                            echo "<a class='slide' href='./product.php'>
                                <img src='$row[url]' style alt='Slide image'>
                            </a>";
                        }
                    }
                ?>
                
            </div>
            
        </div>
        <button id="left">&larr;</button>
        <button id="right">&rarr;</button>
    </div>
    
</body>
</html>