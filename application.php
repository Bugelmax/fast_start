<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Создание формы обратной связи</title>
<meta http-equiv="Refresh" content="4; https://fast-start-eshka.c9users.io/index.html"> 
</head>
<body>

<?php 

$sendto   = "bugelmax@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером

// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Повідомлення з сайту</h2>\r\n";
$msg .= "<p><strong>Від кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<p>Ваше повідомлення відправлено</p>";
} else {
	echo  "<p>Ваше повідомлення не відправлено</p>";
}

?>

</body>
</html>