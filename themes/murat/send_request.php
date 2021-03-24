<?php
header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

$return = array(
	'status' => false
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    function to_utf8($from_text) {
		return '=?UTF-8?B?'.base64_encode($from_text).'?='; //fix Кракозябрица в имени отправителя письма на почте Yandex
	}
	
	$name  = trim(strip_tags($_POST['name'])); 
	$email  = trim(strip_tags($_POST['email'])); 
	$tel   = trim(strip_tags($_POST['tel']));
	$form   = trim(strip_tags($_POST['form']));


	$to    = get_field('form_email', 'option');
	$subject = 'Новая заявка ['.get_option('blogname').']';

	$body   = "
		Имя: {$name} <br>
		Телефон: {$tel} <br>
		Email: {$email} <br>
		Форма: {$form} <br>
	"; // содержание письма
	
	$headers = "MIME-Version: 1.0 \r\n";
	$headers .= "Content-Transfer-Encoding: 8bit \r\n";
	$headers .= "Content-type:text/html;charset=utf-8 \r\n"; //кодировка и тип контента

	if (mail($to, $subject, $body, $headers)) {
		$return['status'] = true;
	}
}

echo json_encode($return);