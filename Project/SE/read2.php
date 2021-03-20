<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
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
</head>
<body>
<table>
<tr>
<th> ID</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>phone</th>
<th> age</th>
<th>graduation</th>
<th>birth date</th>
<th> address</th>
<th>governorate</th>
<th>nationality</th>
<th>N_ID</th>
<th>job</th>
<th>bachelore</th>
<th>gpa</th>
<th>university</th>
<th>faculty</th>
<th>Higher Studeis</th>
<th>university</th>
<th>faculty</th>
<th>department</th>


</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, lastname , email , phone , age ,graduation , birth , address , governorate , nationality , N_ID , job , bachelore , gpa , university ,faculty , h_studies , university1 , faculty1 ,department FROM PHD";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"] . "</td><td>". $row["lastname"] . "</td><td>" . $row["email"] . "</td><td>". $row["phone"] . "</td><td>". $row["age"] . "</td><td>"
  . $row["graduation"] . "</td><td>"
  . $row["birth"] . "</td><td>"
  . $row["address"] . "</td><td>"
  . $row["governorate"] . "</td><td>"
  . $row["nationality"] . "</td><td>"
  . $row["N_ID"] . "</td><td>"
  . $row["job"] . "</td><td>"
  . $row["bachelore"] . "</td><td>"
  . $row["gpa"] . "</td><td>"
  . $row["university"] . "</td><td>"
  . $row["faculty"] . "</td><td>"
  . $row["h_studies"] . "</td><td>"
  . $row["university1"] . "</td><td>"
  . $row["faculty1"] . "</td><td>"
  . $row["department"] . "</td></tr>" ;

  echo ('<td><a href="phdread1.php"><input type="submit" name="submit"
     /></a></td>');

}
echo "</table>";

}

$conn->close();
?>
</table>
</body>
</html>
