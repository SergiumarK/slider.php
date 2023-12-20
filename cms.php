<?php
    require_once "./config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="price" step="0.01" placeholder="Price">
        <input type="text" name="url" placeholder="URL">
        <button name="type" value="product-create">Create</button>
    </form>
</body>
</html>