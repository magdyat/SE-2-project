<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,
        $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO diploma (firstname, lastname,
    email , phone , age , graduation , birth , address , governorate , nationality , N_ID, job , bachelore , gpa , university , faculty , department)
    VALUES (:firstname, :lastname, :email , :phone , :age , :graduation , :birth , :address , :governorate , :nationality , :N_ID , :job , :bachelore , :gpa , :university ,:faculty , :department)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':graduation', $graduation);
    $stmt->bindParam(':birth', $birth);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':governorate', $governorate);
    $stmt->bindParam(':nationality', $nationality);
    $stmt->bindParam(':N_ID', $N_ID);
    $stmt->bindParam(':job', $job);
    $stmt->bindParam(':bachelore', $bachelore);
    $stmt->bindParam(':gpa', $gpa);
    $stmt->bindParam(':university', $university);
    $stmt->bindParam(':faculty', $faculty);
    $stmt->bindParam(':department', $department);



    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $graduation = $_POST["graduation"];
    $birth = $_POST["birth"];
    $address = $_POST["address"];
    $governorate = $_POST["governorate"];
    $nationality = $_POST["nationality"];
    $N_ID = $_POST["N_ID"];
    $job = $_POST["job"];
    $bachelore = $_POST["bachelore"];
    $gpa = $_POST["gpa"];
    $university = $_POST["university"];
    $faculty = $_POST["faculty"];
    $department = $_POST["department"];



    $stmt->execute();


    echo "Succefully Registered";
    }
    catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
    ?>
