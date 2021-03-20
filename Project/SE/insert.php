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
    $stmt = $conn->prepare("INSERT INTO PHD (firstname, lastname,
email , phone , age , graduation , birth , address , governorate , nationality , N_ID, job , bachelore , gpa , university , faculty , h_studies , university1 , faculty1, department)
VALUES (:firstname, :lastname, :email , :phone , :age , :graduation , :birth , :address , :governorate , :nationality , :N_ID , :job , :bachelore , :gpa , :university ,:faculty , :h_studies , :university1 , :faculty1 , :department)");
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
    $stmt->bindParam(':h_studies', $h_studies);
    $stmt->bindParam(':university1', $university1);
    $stmt->bindParam(':faculty1', $faculty1);
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
    $h_studies = $_POST["h_studies"];
    $university1 = $_POST["university1"];
    $faculty1 = $_POST["faculty1"];
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
