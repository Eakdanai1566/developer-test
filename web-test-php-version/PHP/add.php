<?php
    require("conn.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $regisplate = $_POST['regisplate'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $price = $_POST['price'];
        $note = $_POST['note'];
    
        $sql = "INSERT INTO carlist (regisplate, brand, model, price, note) 
                VALUES ('$regisplate', '$brand', '$model', '$price', '$note')";
    
        $conn->query($sql);
    
        header("Location: /index.php");
        exit();
    
    }
?>