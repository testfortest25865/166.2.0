<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$auto = $_POST['user_auto'];
$token = "5350232292:AAEYMi7bjo55_bY_EjGTiOGG9uBU2togwAk";
$chat_id = "-692551178";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Авто:' => $auto
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
