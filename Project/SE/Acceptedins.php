<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,
        $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO accepted (ID, fullname, Degree , Subjects )

VALUES (:ID , :fullname , :Degree , :Subjects)");
    $stmt->bindParam(':ID', $ID);
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':Degree', $Degree);
    $stmt->bindParam(':Subjects', $Subjects);




    $ID = $_POST["ID"];
    $fullname = $_POST["fullname"];
    $Degree = $_POST["Degree"];
    $Subjects = $_POST["Subjects"];




    $stmt->execute();


    echo "Succefully Submitted";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
