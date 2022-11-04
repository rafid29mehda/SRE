<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $identity = $_POST['identity'];
    $location = $_POST['location'];
    $datetime = $_POST['datetime'];
    $purpose = $_POST['purpose'];

    //Database Connection
// if (!empty($name) || !empty($email) || !empty($number) || !empty($identity) || !empty($location) || !empty($datetime) || !empty($purpose)){
//     $host = "localhost";
//     $dbUsername = "root";
//     $dbPassword = "";
//     $dbname = "youtube";

//     $conn = new mysqli
// }








    $conn = new mysqli('localhost','root','','gate');
    if($conn->connect_error){
        die('Connection Failed : '. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into pass(name,email,number,identity,location,datetime,purpose)
        values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$name,$email,$number,$identity,$location,$datetime,$purpose);
        $execval = $stmt->execute();
		echo $execval;
        echo "Form Filled Successfully....";
        $stmt->close();
        $conn->close();
    }

?>