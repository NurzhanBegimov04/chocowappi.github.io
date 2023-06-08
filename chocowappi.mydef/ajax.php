<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
&& !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	$requestData = $_POST;

	$errors = array();

	if (!$requestData['id'])
		$errors[] = 'Не получен ID товара';

	if (!$requestData['fio'])
		$errors[] = 'Поле "Имя И Фамилия" обязательно для заполнения';

	if (!$requestData['phone'])
		$errors[] = 'Вы должны заполнить номер телефона';
		
	if (!$requestData['email'])
		$errors[] = 'Вы должны заполнить Email';

	$response = array();

	if ($errors) {
		$response['errors'] = $errors;
	} else {
		$PDO = PdoConnect::getInstance();

		$sql = "INSERT INTO `orders` SET `fio` = :fio, `phone` = :phone, `whatsapp` = :whatsapp, `email` = :email, `comment` = :comment, `product_id` = :id";

		$set = $PDO->PDO->prepare($sql);
		$response['res'] = $set->execute($requestData);

		if ($response['res']) {
			$headers  = "Content-type: text/html; charset=utf-8\r\n";
			$message =
			'<html>
				<body>
					<center>	
          <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
						 <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Заказан товар</b></td></tr>
						 <tr>
						  <td><b>Имя и Фамилия</b></td>
						  <td>'. $requestData['fio'] .'</td>
						 </tr>
						 <tr>
						 <td rowspan="2"	><b>Номер</b></td>
						 <td>'. $requestData['phone'] .'</td>
						 <tr>
						 <td><p>WhatsApp: '. $requestData['whatsapp'] .'</p></td>
						 </tr>
						</tr>
						<tr>
						<td><b>Почта</b></td>
						<td>'. $requestData['email'] .'</td>
					   </tr>
					   <tr>
					   <td><b>Товар айди</b></td>
					   <td>'. $requestData['id'] .'</td>
					  </tr>
					  <tr>
					  <td><b>Товар</b></td>
					  <td>'. $requestData['comment'] .'</td>
					  </tr>

						</table>
					</center>	
				</body>
			</html>';

				mail('Bele.birda@yandex.ru', 'Оформлен новый заказ', $message,$headers, 'FROM: matoblue9@gmail.com');

			
	 	}
	}
	echo json_encode($response);
}
