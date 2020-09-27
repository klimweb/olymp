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

    echo 'Турнир оплачен';
}
?>