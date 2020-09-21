<?php
	include '../includes/db.php';

	$uid = $_GET['uid'];

	if (isset($uid)) {
		if (!isset($_GET['tickets'])) return false;
		switch ($_GET['tickets']) {
			case '2':
				$price = 99;
				break;

			case '8':
				$price = 300;
				break;

			case '15':
				$price = 500;
				break;
			
			default:
				$price = $_GET['tickets'] * 49.50;
				break;
		}
		if ($user->balance < $price) {
			echo "Недостаточно баланса! Оплатите через RoboKassa";
			return false;
		}

		$user = R::load('users', $uid);
		$user->tickets += $_GET['tickets'];
		$user->balance -= $price;
		R::store($user);

		echo "Билеты куплены!";

	} else {
		echo "Обновите страницу и попробуйте ещё раз";
	}
?>