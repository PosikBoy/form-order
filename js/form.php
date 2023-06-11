<?php

// Токен
$token = '5430208532:AAElezfvcZLFJuPyKHnpg_p2_bjzxFaIwTQ';

// ID чата
$chatid = '-860468040';

$first_adress = $_POST['first__adress'];
$first_entrance = $_POST['first__entrance'];
$first_floor = $_POST['first__floor'];
$first_flat = $_POST['first__flat'];
$first_phone = $_POST['first__phone'];
$second_adress = $_POST['second__adress'];
$second_entrance = $_POST['second__entrance'];
$second_floor = $_POST['second__floor'];
$second_flat = $_POST['second__flat'];
$second_phone = $_POST['second__phone'];

$arr = array(
  "Первый адрес" => $first_adress,
  "Подъезд1" => $first_entrance,
  "Этаж1" => $first_floor,
  "Квартира1" => $first_flat,
  "Номер телефона1" => $first_phone,
  "Второй адрес" => $second_adress,
  "Подъезд2" => $second_entrance,
  "Этаж2" => $second_floor,
  "Квартира2" => $second_flat,
  "Номер телефона2" => $second_phone,
);
foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b>" . $value . "%0A";
}
;
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
} else {
  echo "Error";
}
?>