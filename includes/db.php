<?php
require('rb.php');
R::setup( 'mysql:host=localhost;dbname=erikajce_olymp',
           'erikajce_olymp', 'olymp-2020' );

if ( !R::testconnection() )
{
	exit('Нет соединения с базой данных');
}

session_start();

if (isset($_SESSION['user'])) {
	setcookie('reg', 1);
	$user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));
	//printf($user);
	//echo $_SESSION['user']->id;
}