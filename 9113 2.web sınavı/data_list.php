<?php 

echo "Kayıt Sayfası"."</br>";

echo $_GET["Name"] ."</br>";
echo $_GET["Surname"] ."</br>";
echo $_GET["Gender"] ."</br>";
echo $_GET["ClassName"] ."</br>";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "9113 2.web sınavı";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (name, Surname, Gender,ClassId,Imagepath)
VALUES ('".$_GET["Name"]."', '".$_GET["Surname"]."',".$_GET["Gender"].",".$_GET["ClassName"] .",'male.jpg')";

echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>