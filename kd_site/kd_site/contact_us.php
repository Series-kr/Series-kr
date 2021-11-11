<?php 
session_start();
include('connection.php');
          
	//calling inputs from form
 $userName = Sanitize_Data($_POST['namee']);
 $requestMail = Sanitize_Data($_POST['emaill']);
 $requestMessage  = Sanitize_Data($_POST['messagee']);
 
 if ($userName == "" || $requestMessage =="") {
    header("Location: index.html");
 }else {
 //inserting data into the database
   
   $insertData = "INSERT INTO contacts (Name, Mail, Message) VALUES ('$userName', '$requestMail','$requestMessage')";

   if (mysqli_query($conn,$insertData)) {
   header("Location: index.html");
   
   }else{
    echo $error = "Error Occured: " .mysqli_error($conn);
   
   }
  }

  
 mysqli_close($conn);
  

?>