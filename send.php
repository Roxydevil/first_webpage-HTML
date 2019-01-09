<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$comment = htmlspecialchars($comment);

$name = urldecode($name);
$email = urldecode($email);
$comment = urldecode($comment);

$name = trim($name);
$email = trim($email);
$comment = trim($comment);
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
if (mail("roxamihi@mail-2-you.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email. ". Comment: ".$comment,"From: roxamihi@mail-2-you.com \r\n"))
{
	echo "сообщение успешно отправлено"; 
} 
	else 
{ 
    echo "при отправке сообщения возникли ошибки";
}
?>