<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Olymp Games | Esports Platform. Get real money now!</title>
    <meta name='keywords'    content=''>
    <meta name='description' content=''>
    <meta name='author'      content=''>
    <meta name='copyright'   content=''>

    <!-- BEGIN CONNECTION STYLESHEETS -->
    <link rel='stylesheet' type='text/css' href='../../assets/css/reset.css'>
    <link rel='stylesheet' type='text/css' href='../../assets/css/style.css'>
    <link rel='stylesheet' type='text/css' href='../../assets/css/media-queries.css'>
    <!-- END CONNECTION STYLESHEETS -->

    <!-- BEGIN CONNECTION SCRIPTS -->
    <script src='../../assets/js/jquery-3.5.1.min.js'></script>
    <script src='../../assets/js/script.js'></script>
    <!-- END CONNECTION SCRIPTS -->
</head>
<body>
<!-- BEGIN WRAPPER -->
<div class='wrapper'>
    <!-- BEGIN HEADER -->
    <div class='header'>
        <!-- BEGIN INNER HEADER -->
        <div class='inner-header'>
            <!-- BEGIN LOGO -->
            <div class='logo'>
                <a href='/' target='_self'></a>
            </div>
            <!-- END LOGO -->

            <?php include '../../includes/nav.php'; ?>
        </div>
        <!-- END INNER HEADER -->
    </div>
    <!-- END HEADER -->

    <div style="width: 800px; margin: 50px auto 0">
        <h1 style="margin-bottom: 20px; font-size: 22px; font-weight: 900; text-align:center;">Уведомления:</h1>
        <?php
        $notifications = R::getAll('SELECT * FROM notifications WHERE uid = ? ORDER BY id DESC', array($user->id));
        foreach ($notifications as $notification) :
            ?>
            <div class="item" style="display: block;padding: 7px 0px;width: 100%;text-align:center;font-size: 17px;">
                <?php echo $notification['txt']; ?>
            </div>
        <?php
        endforeach;
        if (count($notifications) < 1) :
            ?>
            <p style="text-align: center;margin-top: 20px;font-size: 16px;opacity: 0.5;">У вас пока нет уведомлений</p>
        <?php
        endif;
        ?>
    </div>

    <style>
        .item a {
            color: #fff;
            text-decoration: underline;
            font-weight: 700;
        }
    </style>

    <!-- BEGIN FOOTER -->
    <div class='footer'>
        <!-- BEGIN INNER FOOTER -->
        <div class='__footer'>
            <!--  BEGIN SOCIAL ICONS -->
            <div class='social-icons'>
                <a href='#' target='_blank' class='facebook'></a>
                <a href='#' target='_blank' class='twitter'></a>
                <a href='#' target='_blank' class='google-plus'></a>
                <a href='#' target='_blank' class='instagram'></a>
            </div>
            <!--  END SOCIAL ICONS -->

            <!--  BEGIN FOOTER NAV -->
            <ul class='footer-nav'>
                <li><a href='/terms-of-use/'>Terms of Use</a></li>
                <li><a href='/privacy-policy/'>Privacy Policy</a></li>
                <li><a href='/refound-policy/'>Refund Policy</a></li>
                <li><a href='/support/'>Support</a></li>
            </ul>
            <!--  END FOOTER NAV -->

            <div class='sixteen-plus'></div>
            <p class='copyright'>&copy; 2020 SPARTANS ESPORTS PLATFORM, STEPANAKERT, ARMENIA, 375000</p>

            <!-- BEGIN PAYMENT SYSTEMS -->
            <div class='payment-systems'>
                <a href='https://www.mastercard.com/' target='_blank' class='mastercard'></a>
                <a href='https://www.visa.com/'       target='_blank' class='visa'></a>
                <a href='https://www.qiwi.com/'       target='_blank' class='qiwi'></a>
                <a href='https://money.yandex.ru/'    target='_blank' class='yandex'></a>
            </div>
            <!--  END PAYMENT SYSTEMS -->
        </div>
        <!-- END INNER FOOTER -->
    </div>
    <!-- END FOOTER -->
</div>
</body>
</html>