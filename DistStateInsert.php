<?php

$pid = $_POST['organizationID'];
$name = $_POST['name'];

$servername = "ecs-pd-proj-db.ecs.csus.edu";
$username = "placeholder";
$password = "placeholder";
$db = "placeholder";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
// Check connection
$statement = $conn->prepare("insert into DISTRIBUTER(id,name) values(?,?)");

$statement->bind_param("is",$id,$name,);

$statement->execute();

echo "ADDED: ".$id.", ".$name."<br>";

$statement->close();
$conn->close();

?>