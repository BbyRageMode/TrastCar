<?php

$phone = trim(htmlspecialchars($_POST['phone']));
$name = trim(htmlspecialchars($_POST['name']));
echo $phone . $name;
?>