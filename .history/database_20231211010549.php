<!-- Using PDO (PHO Data Object) -->

<?php

$dbhost = "sql304.infinityfree.com";
$dbuser = "if0_35591742";
$dbpass = "zNpbuF0CM8 ";
$dbname = "if0_35591742_birthdaywishes";

try{

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // echo 'Connect Successfully';


}catch(PDOException $e){

    echo "Error Fuond :".$e->getMessage();

}





?>
<!-- 
CREATE TABLE IF NOT EXISTS wishes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    photo BLOB(512),
    name VARCHAR(255),
    wish VARCHAR(255)
); 


-->
