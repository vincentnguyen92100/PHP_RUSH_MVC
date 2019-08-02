<?php

        $servername = "localhost";
        $username = "MVC";
        $password = "mvc";
        $dbname = "MVC_RUSH";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'connected';
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }

?>

