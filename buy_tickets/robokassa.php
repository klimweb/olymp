<html>
<head>
    <meta charset="utf-8">
</head>
<?
include "../includes/db.php";
// 2.
// Оплата заданной суммы с выбором валюты на сайте ROBOKASSA
// Payment of the set sum with a choice of currency on site ROBOKASSA

// регистрационная информация (логин, пароль #1)
// registration info (login, password #1)
$mrh_login = "Olymp.games";
$mrh_pass1 = "aQsbF186wNhp3GBG8lmW";

// номер заказа
// number of order
$inv_id = mt_rand(111111,99999999);

// описание заказа
// order description
$inv_desc = "Оплата услуг сайта olymp.games";

// сумма заказа
// sum of order
$out_summ = $_GET['summ'];

// тип товара
// code of goods
$shp_item = "2";

// предлагаемая валюта платежа
// default payment e-currency
$in_curr = "";

// язык
// language
$culture = "ru";

// формирование подписи
// generate signature
$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item:Shp_uid=$user->id");

// форма оплаты товара
// payment form
print "<form action='https://auth.robokassa.ru/Merchant/Index.aspx' id='form' style='display: none' method=POST>".
    "<input type=hidden name=MerchantLogin value=$mrh_login>".
    "<input type=hidden name=OutSum value=$out_summ>".
    "<input type=hidden name=InvId value=$inv_id>".
    "<input type=hidden name=Description value='$inv_desc'>".
    "<input type=hidden name=SignatureValue value=$crc>".
    "<input type=hidden name=Shp_item value='$shp_item'>".
    "<input type=hidden name=IncCurrLabel value=$in_curr>".
    "<input type=hidden name=Culture value=$culture>".
    "<input type=hidden name=IsTest value=1>".
    "<input type=hidden name=Shp_uid value=$user->id>".
    "<input type=submit value='Pay'>".
    "</form>";
?>
<p>Перенаправление...</p>
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script>
    $('#form').submit();
</script>
</html>
