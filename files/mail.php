<?php


$to = "karpenko@itstep.org";
$subject = "Письмо с сайта";
$kol = (isset($_POST['kol'])) ? $_POST['kol'] : '';
$ar = (isset($_POST['ar']))?$_POST['ar'] : '';
$tar = (isset($_POST['tar']))?$_POST['tar'] : '';
$avt = (isset($_POST['avt']))?$_POST['avt'] : '';
$pay = (isset($_POST['pay']))?$_POST['pay'] : '';
$message = "<html>
<head>
<title>$subject</title>
</head>
<body>
<p><strong>Количество: </strong>$kol</p>
<p><strong>Аренда: </strong>$ar</p>	
<p><strong>Цель: </strong>$tar</p>	
<p><strong>Аторизация: </strong>$avt</p>	
<p><strong>Способ оплаты: </strong>$pay</p>	

</body>
</html>";
$headers = "Content-type: text/html";
if(mail($to, $subject, $message, $headers)){
	echo "Спасибо! Мы свяжемся с Вами!";
} 
 else{
 	echo"Извините!";
 }

 ?>