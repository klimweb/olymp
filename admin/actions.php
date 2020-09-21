<?php
include '../includes/db.php';

// Добавление турнира
if ($_POST['action'] == 'add_tournament') {
	// Name
	$name = $_POST['name'];
	// Game
	$game = $_POST['game'];
	// Prize
	$prize = $_POST['prize'];
	// Players
	$players = $_POST['players'];
	// Date
	$date = $_POST['date'].' '.$_POST['time'];
	$date = preg_replace('/:[0-9][0-9][0-9]/','',$date);
	$time = strtotime($date);

	// Save
	$tournament = R::dispense('tournaments');
    $tournament->img 		= $_POST['img'];
    $tournament->name 		= $name;
    $tournament->game  		= $game;
    $tournament->prize  	= $prize;
    $tournament->players 	= $players;
    $tournament->data 		= $time;
    $tournament->mode 		= $_POST['mode'];
    R::store($tournament);

    echo 'success';
}
// Добавление турнира (конец)

// Редактирование турнира
if ($_POST['action'] == 'update_tournament') {
	// Name
	$name = $_POST['name'];
	// Game
	$game = $_POST['game'];
	// Prize
	$prize = $_POST['prize'];
	// Players
	$players = $_POST['players'];
	// Date
	$date = $_POST['date'].' '.$_POST['time'];
	$date = preg_replace('/:[0-9][0-9][0-9]/','',$date);
	$time = strtotime($date);

	// Update
	$tournament = R::load('tournaments', $_POST['id']);
    $tournament->img 		= $_POST['img'];
    $tournament->name 		= $name;
    $tournament->game  		= $game;
    $tournament->prize  	= $prize;
    $tournament->players 	= $players;
    $tournament->data 		= $time;
    $tournament->mode 		= $_POST['mode'];
    R::store($tournament);

    echo 'success';
}
// Редактирование турнира (конец)


// Редактирование пользователя
if ($_POST['action'] == 'update_user') {

	// Update
	$user = R::load('users', $_POST['id']);
    $user->tickets 	= $_POST['tickets'];
    $user->balance  = $_POST['balance'];
    R::store($user);

    echo 'success';
}
// Редактирование пользователя (конец)


// Получение информации о турнире
if ($_POST['action'] == 'get_info_tournament') {
	$tournament = R::findOne('tournaments', 'id = ?', array($_POST['id']));
	echo $tournament;
}
// Получение информации о турнире (конец)


// Получение информации о пользователе
if ($_POST['action'] == 'get_user') {
	$user = R::findOne('users', 'id = ?', array($_POST['id']));
	echo $user;
}
// Получение информации о пользователе (конец)
?>