<?php 
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', '12345');
 define('DB_NAME', 'kdsite');
 

 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 // var_dump($conn);

 if($conn){
   
 }else{
   echo "Database Connection Error. Contact System Administrator.";    
 }

// function to sanitize input from user
function Sanitize_Data($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
?>