<style>
table {
  border-collapse: separate;
  border-color:#000000;

width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
min-width:150px;
max-width: 300px;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}




</style>
<?php
echo "<table >";
        echo "<tr><th>Id</th><th>first name</th><th>Last name</th><th>email </th><th>phone </th><th>age</th><th>graduation</th><th>birth.</th><th>address</th><th>governorate</th><th>nationality</th><th>National ID </th> <th>job</th><th>bachelore</th><th>gpa</th><th>university</th><th>faculty</th><th>Postgraduate studies</th><th>university</th><th>faculty</th><th>department</th>       </tr>";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT id, firstname, lastname , email , phone , age ,graduation , birth , address , governorate , nationality , N_ID , job , bachelore , gpa , university ,faculty , h_studies , university1 , faculty1 ,department FROM PHD");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach ($stmt->fetchAll() as $row) {
                echo "<tr>";
                foreach ($row as $val) {
                    echo "<td>" . $val . "</td>";
                }
                echo "<td><a href='phdread1.php?id=".$row['id']."'>Reject And Delete></a></td>";
                echo "</tr>";
            }

        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        echo "</table>";
?>
