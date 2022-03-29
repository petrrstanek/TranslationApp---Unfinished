<?php
<?php
session_start();

$conn = new mysqli("localhost", "root", "root", "translation_app");

if($conn->connect_error){
    die("Connection error" . $conn->connect_error);
}

ini_set("allow_url_fopen", 1);
$apiKey = 'AIzaSyAIBiMtLXxAPBBtFEb9dyQgWFpfIsEHjw4';

$toTranslate = $_POST['eng-space'];
$userInput = $_POST['user'];
$data = rawurlencode($toTranslate);

$source = 'eng';
$target = 'cs';
$url = "https://www.googleapis.com/language/translate/v2?key=$apiKey&q=$data&source=$source&target=$target";
$json = file_get_contents($url);
$decoded = json_decode($json, true);
$optimizeRes = $decoded['data']['translations'][0]['translatedText'];
$counter = 0;

if ($optimizeRes == $userInput){
  echo('Super! Správně!');
  $sql = "INSERT INTO cache (session_id, bool) VALUES ($_SESSION[lastId], 1)";
  $conn->query($sql);
}

elseif ($toTranslate == 'complete'){
    echo('Dokončil jste test...');
}

elseif ($userInput == ''){
  echo('Nezadal jste...');
}

else{
  echo('Zadal jste špatný překlad');
  $sql = "INSERT INTO cache (session_id, bool) VALUES ($_SESSION[lastId],0)";
  $conn->query($sql);
}
$conn->close();
$_SESSION["wtf"] = 'test';