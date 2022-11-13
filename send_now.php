<?php

$returnData = array();
$phone = trim(htmlspecialchars($_POST['phone']));
$name = trim(htmlspecialchars($_POST['name']));

$to  = "<mail@trustcar.ru>" ; 


$subject = "Заявка удаление катализатора бесплатно"; 

$message = ' <p>Содержание заявки</p> <br> <b>Телефон:</b>'.$phone.' <br> <br/> <br> <b>Имя: </b>'.$name.' <br>';

$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: Удаление катализатора в Краснодаре <admin@kat23krd.ru>\r\n"; 
$headers .= "Reply-To: admin@kat23krd.ru\r\n"; 

mail($to, $subject, $message, $headers); 

echo json_encode($returnData['success'] = true);
?>