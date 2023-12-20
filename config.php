<?php
    $conn = new mysqli("localhost", "root", "", "slider_php");

    if ($conn->connect_error) {
        die("Error: $conn->connect_error");
    }