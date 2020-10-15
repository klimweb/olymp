<?php

// регистрационная информация (пароль #2)
// registration info (password #2)
$mrh_pass2 = "mKdq5Sl9AkS4Ei0Vxh7U";

// чтение параметров
// read parameters
$out_summ = $_POST["OutSum"];
$inv_id = $_POST["InvId"];
$shp_item = $_POST["Shp_item"];
$crc = $_POST["SignatureValue"];
$shp_uid = $_POST["Shp_uid"];

$crc = strtoupper($crc);

$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2:Shp_item=$shp_item:Shp_uid=$shp_uid"));

// проверка корректности подписи
// check signature
if ($my_crc != $crc)
{
    echo "bad sign\n";
    exit();
}

// признак успешно проведенной операции
// success
echo "OK$inv_id\n";

include '../includes/db.php';
switch ($out_summ) {
    case '99':
        $tickets = 2;
        break;
    case '300':
        $tickets = 8;
        break;
    case '500':
        $tickets = 15;
        break;
    default:
        $tickets = $out_summ / 49.50;
}

$user = R::load('users', $shp_uid);
$user->tickets += $tickets;
R::store($user);

notification($shp_uid, "Вы купили $tickets билет(ов)");

?>


