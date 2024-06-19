<?php
    require("conn.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $carid = $_POST["carid"];
        $regisplate = $_POST['regisplate'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $price = $_POST['price'];
        $note = $_POST['note'];
    
        $sql = "UPDATE carlist SET regisplate = '$regisplate', brand = '$brand', model = '$model', price = '$price', note = '$note' WHERE carid = $carid;";
    
        $conn->query($sql);
    
        header("Location: /index.php");
        exit();
    }
?>