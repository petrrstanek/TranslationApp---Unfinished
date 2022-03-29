<?php
session_start();
$conn = new mysqli("localhost", "root", "root", "translation_app");

if($conn->connect_error){
    die ("Connection error" . $conn->connect_error);
}
$last_id = $_SESSION['lastId'];
$ones = "SELECT bool FROM cache WHERE bool= 1 AND session_id = '".$last_id."' ";
$zeros = "SELECT bool FROM cache WHERE bool= 0 AND session_id = '".$last_id."'";
$preeminent = $conn->query($ones);
$lowerBracket = $conn->query($zeros);
$total = $preeminent->num_rows + $lowerBracket->num_rows;

$_SESSION['successRate'] = 100 / $total * $preeminent->num_rows;

$conn->close()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="amount"><?=$_SESSION['successRate']?></div>
    </div>
    <script src="js/ajax.js"></script>
    <script src="js/dashboard_scr.js"></script>
</body>

</html>