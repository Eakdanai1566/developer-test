<?php
    require("conn.php");

    $carid = $_GET['carid'];
        
    $sql = "DELETE FROM carlist WHERE carid = $carid";

    $delete = $conn->query($sql);

    header("Location: /index.php");
    exit();
?>