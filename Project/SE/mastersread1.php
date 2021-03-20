<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$id = $_GET["id"];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      
        $sql = $conn->prepare("DELETE FROM master WHERE id = ?");
        $success = $sql->execute(array($id));

        echo $success ? "Record deleted successfully" : "Record not deleted";
        }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }

    $conn = null;
    ?>
