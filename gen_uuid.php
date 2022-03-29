<?php
session_start();
if(isset($_POST['uuid-btn'])){
    $conn = new mysqli("localhost", "root", "root", "translation_app");
    if($conn->connect_error){
        die("Connection error" . $conn->connect->error);
    }

    $sql = "INSERT INTO uuid (random) VALUES (1)";
    if($conn->query($sql) === TRUE){
        header("Location: http://localhost:8888/PHP/TranslationApp/exam.php");
    } else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $_SESSION['lastId'] = $conn->insert_id;
    $conn->close();
}
?>