<?php 

// $returnData = array();
// $phone = trim(htmlspecialchars($_POST['phone']));
// $date = trim(htmlspecialchars($_POST['date']));
// $carModel = trim(htmlspecialchars($_POST['carModel']));
// $service = trim(htmlspecialchars($_POST['service']));
// $repairType = trim(htmlspecialchars($_POST['repairType']));
// $faster = trim(htmlspecialchars($_POST['faster']));

$returnData = array();
$phone = $_POST['phone'];
$date = $_POST['date'];
$carModel = $_POST['carModel'];
$service = $_POST['service'];
$repairType = $_POST['repairType'];
$faster = $_POST['faster'];

$token = "1909471943:AAEBQ0ZIdBN1qrf-4WN1AqWw6ivAvKJwqtc";
$chat_id = "-1001535206802"; 

$arr = array(
    "Телефон: " => $phone,
    "Марка автомобиля: " => $carModel,
    "Выбор сервиса: " => $service,
    "вид ремонта: " => $service2,
    "Услуга: " => $service3,
    // "Вид ремонта: " => $repairType,
    "Дата: " => $date,
    "Срочно: " => $faster,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

echo json_encode($returnData['success'] = true);

?>





