<?php
    function delete_car($carid){
        require("conn.php");

        $delete = $conn->query("DELETE FROM cars WHERE carid = $carid");
    }
?>