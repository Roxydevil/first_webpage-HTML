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
if (mail("Taranovaleksey@gmail.com", "Çàÿâêà ñ ñàéòà", "ÔÈÎ:".$name.". E-mail: ".$email. ". Comment: ".$comment,"From: Taranovaleksey@gmail.com \r\n"))
{
	echo "Sended"; 
} 
	else 
{ 
    echo "Error";
}
?>
