<?php
include "db.php";

$notifs = R::getAll('SELECT * FROM notifications WHERE uid = ? AND view = 0', array($user->id));
foreach ($notifs as $notif) {
    $item = R::load('notifications', $notif['id']);
    $item->view = 1;
    R::store($item);
}
?>