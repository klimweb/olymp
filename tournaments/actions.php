<?php
include "../includes/db.php";

if ($_POST['action'] == 'buy_tournament') {
    $price_tickets = 1;
    if ($user->tickets < $price_tickets) {
        echo 'Не достаточно билетов';
        return false;
    }
    $uid = $user->id;
    $user = R::load('users', $uid);
    $user->tickets -= $price_tickets;
    R::store($user);

    $tour_buy = R::dispense('toursbuy');
    $tour_buy->uid = $uid;
    $tour_buy->tid = $_POST['id'];
    R::store($tour_buy);

    notification($user->id, "Оплачено участие в турнире! Ожидайте данные");

    echo 'Турнир оплачен';
}

if ($_POST['action'] == 'get_idpass') {
    $tour = R::findOne('toursbuy', 'tid = ? and uid = ?', array($_POST['id'], $user->id));
    if ($tour->accpass == '') {
        echo "Ожидайте данные";
        return false;
    }
    echo "ID: $tour->accid <br>Пароль: $tour->accpass";
}
?>