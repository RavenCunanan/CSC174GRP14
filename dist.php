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
        
         $sql = "SELECT * FROM distributer";
         $result = $conn->query($sql);


         if ($result->num_rows > 0) {
         echo "<table><tr><th>ID</th><th>Name</th></tr>";
         // output data of each row
         while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td></tr>";
         }
         echo "</table>";
         } else {
         echo "0 results";
         }
         $statement->close();
         $conn->close();
         }
         
      }

?>
