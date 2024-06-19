<?php
    require("conn.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $regisplate = $_POST['regisplate'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $note = $_POST['note'];
    
        $sql = "INSERT INTO carlist (regisplate, brand, model, note) 
                VALUES ('$regisplate', '$brand', '$model', '$note')";
    
        $conn->query($sql);
    
        header("Location: /index.php");
        exit();
    
    }
?>