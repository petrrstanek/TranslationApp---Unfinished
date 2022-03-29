<?php
session_start();
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Učení slovní zásoby</title>
</head>

<body>
    <div class="container">
        Učení slovní zásoby

        <div class="correct"></div>
        <div class="bad"></div>
        <div class="amount"></div>
        <form id="form">
            K překladu
            <!-- <input type="text" name="amount" class="amount form-data"> -->
            <input type="text" name="eng-space" class="eng-space form-data" value="<?=$_SESSION['test']?>">
            <input type="text" name="user" id="user-input" class="form-data">
            <div class="alert alert-success" style="display: none;">
                <span id="message-box-success"></span>
            </div>
            <div class="alert alert-danger" style="display: none;">
                <span id="message-box-danger"></span>
            </div>
            <!-- <input type="submit" value="Enter"> -->

        </form>

        <button class="next" onclick="feeder(); return false">Další</button>
        <button class="enter" name="translate" onclick="submit(); return false;">Vyhodnotit</button>
    </div>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
</body>

</html>