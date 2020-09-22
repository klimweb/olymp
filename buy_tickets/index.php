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
        <link rel='stylesheet' type='text/css' href='../../profile/assets/css/reset.css'>
        <link rel='stylesheet' type='text/css' href='../../assets/css/style.css'>
        <link rel='stylesheet' type='text/css' href='../../profile/assets/css/media-queries.css'>
        <link rel='stylesheet' type='text/css' href='../../profile/assets/css/slick.css'>
        <link rel='stylesheet' type='text/css' href='../../profile/assets/css/slick-theme.css'>
        <link rel="stylesheet" href="../../assets/css/tournaments.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <!-- END CONNECTION STYLESHEETS -->

        <!-- BEGIN CONNECTION SCRIPTS -->
        <script src='../../profile/assets/js/jquery-3.5.1.min.js'></script>
        <script src='../../profile/assets/js/script.js'></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
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
                    
                    <?php include '../includes/nav.php'; ?>

                </div>
                <!-- END INNER HEADER -->
            </div>
            <!-- END HEADER -->
            <?php if (isset($_SESSION['user'])) : ?>
            <a href="/buy_tickets" class="tickets_balance">
                <img src="../img/ticket.png" alt=""><span><?php echo $user->tickets; ?></span>
            </a>
            <?php endif; ?>
        

            <div class="page_buy_tickets">
                <h2>Билеты</h2>
                <div class="items_tickets">
                    <div class="item_ticket add_balance" data-tickets="2">
                        <img class="img_ticket" src="../img/tickets.png" alt="tickets">
                        <div class="info_tickets">
                            <p>2 билета</p>
                            <span>Купить за 99 руб.</span>
                            <span class="price_ticket">1 БИЛЕТ = 49.50 руб</span>
                        </div>
                    </div>
                    <div class="item_ticket add_balance" data-tickets="8">
                        <img class="img_ticket" src="../img/tickets.png" alt="tickets">
                        <div class="info_tickets">
                            <p>8 билетов</p>
                            <span>Купить за 300 руб.</span>
                            <span class="price_ticket">1 БИЛЕТ = 37.50 руб</span>
                        </div>
                    </div>
                    <div class="item_ticket add_balance" data-tickets="15">
                        <img class="img_ticket" src="../img/tickets.png" alt="tickets">
                        <div class="info_tickets">
                            <p>15 билетов</p>
                            <span>Купить за 500 руб.</span>
                            <span class="price_ticket">1 БИЛЕТ = 33.33 руб</span>
                        </div>
                    </div>
                </div>
            </div>


            <!-- BEGIN FOOTER -->
            <div class='footer'>
                <!-- BEGIN INNER FOOTER -->
                <div class='__footer'>
                    <div class='social-icons'>
                        <a href='#' target='_blank' class='facebook'></a>
                        <a href='#' target='_blank' class='twitter'></a>
                        <a href='#' target='_blank' class='google-plus'></a>
                        <a href='#' target='_blank' class='instagram'></a>
                    </div>
                    <ul class='footer-nav'>
                        <li><a href='/terms-of-use/'>Terms of Use</a></li>
                        <li><a href='/privacy-policy/'>Privacy Policy</a></li>
                        <li><a href='/refound-policy/'>Refund Policy</a></li>
                        <li><a href='/support/'>Support</a></li>
                    </ul>
                    <div class='sixteen-plus'></div>
                    <p class='copyright'>&copy; 2020 SPARTANS ESPORTS PLATFORM, STEPANAKERT, ARMENIA, 375000</p>
                    <div class='payment-systems'>
                        <a href='https://www.mastercard.com/' target='_blank' class='mastercard'></a>
                        <a href='https://www.visa.com/'       target='_blank' class='visa'></a>
                        <a href='https://www.qiwi.com/'       target='_blank' class='qiwi'></a>
                        <a href='https://money.yandex.ru/'    target='_blank' class='yandex'></a>
                    </div>
                </div>
                <!-- END INNER FOOTER -->
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- END WRAPPER -->

        <div id="buy_tournament_tickets" class="add_balance_modal" style="display: none">
                <h2>Способ оплаты</h2>
                <p style="opacity: 0.7">К оплате: <span id="for_oplata">0</span> руб</p>
                <!-- <p>Вы получите <span id="do_get_tickets"></span> <img src="../../img/ticket.png" style="width: 25px;" alt=""></p> -->
                <input type="hidden" value="0" id="val_tickets">
                <input type="hidden" value="<?php echo $user->id ?>" id="uid">
                <div class="items_tickets">
                    <div class="item_ticket">
                        <img class="img_ticket" src="../img/RoboKassa.png" alt="robokassa">
                        <div class="info_tickets">
                            <p>RoboKassa</p>
                        </div>
                    </div>
                    <div class="item_ticket" id="buy_balance">
                        <img class="img_ticket" src="../img/ruble.png" alt="balance">
                        <div class="info_tickets">
                            <p>С баланса</p>
                            <span>На балансе <?php echo $user->balance; ?> руб</span>
                        </div>
                    </div>
                </div>
            </div>

        <script>
        $('.game').hover(function () {
            $(this).find('.game-status').removeAttr('hidden').css('opacity', '0.7');
        }, function () {
            $(this).find('.game-status').attr('hidden', 'hidden');
        } );

        $('.add_balance').click(function() {
            $.fancybox.open({
                src  : '.add_balance_modal',
                type : 'inline',
                opts : {
                    afterShow : function( instance, current ) {
                        //console.info( 'done!' );
                    }
                }
            });
            var tickets = $(this).attr('data-tickets');
            var price = 0;
            switch (tickets) {
                case "2":
                    price = 99;
                    break;
                case "8":
                    price = 300;
                    break;
                case "15":
                    price = 500;
                    break;
                default:
                    price = tickets * 50;
                    break;
            }
            $('#for_oplata').text(price);
            $('#val_tickets').val(tickets);
        });

        $('#buy_balance').click(function() {
            if (confirm('Вы уверены?')) {
                $.ajax({
                  type: "GET",
                  url: 'buy_balance.php',
                  data: {
                    "tickets": $('#val_tickets').val(),
                    "uid": $('#uid').val(),
                  },
                  success: function(data) {
                    alert(data);
                    location.reload();
                  },
                  //dataType: dataType
                });
            }
        });
        </script>

        <script src='../../profile/assets/js/slick.min.js'></script>
    </body>
</html>