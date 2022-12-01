<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST['id'])&& isset($_POST['name'])){
         $pid = $_POST['id'];
         $name = $_POST['name'];
         $servername = "ecs-pd-proj-db.ecs.csus.edu";
         $username = "";
         $password = "";
         $db = "";

         $conn = new mysqli($servername, $username, $password, $db);

         if ($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
         }

         $statement = $conn->prepare("insert into distributer(id,name) values(?,?)");

         $statement->bind_param("is",$pid,$name,);

         $statement->execute();

         echo "ADDED: ".$pid.", ".$name."<br>";

         $statement->close();
         $conn->close();
         }
         
      }

?>