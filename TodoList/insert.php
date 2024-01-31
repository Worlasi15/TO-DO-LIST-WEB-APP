<?php

   require "conn.php";

   if(isset($_POST["submit"])) {
   
   		$task = $_POST['mytask'];
           $time= $_POST['time'];

   	    $insert = $conn->prepare("INSERT INTO tasks (name,time) VALUES (:name,:time)");

   	    $insert->execute([

               ':name' => $task,
                ':time' => $time
        ]);
   
        header("location: index.php");
   	
   } 



?>