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
        <link rel='stylesheet' type='text/css' href='assets/css/reset.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/style.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/media-queries.css'>
        <!-- END CONNECTION STYLESHEETS -->

        <!-- BEGIN CONNECTION SCRIPTS -->
        <script src='assets/js/jquery-3.5.1.min.js'></script>
        <script src='assets/js/script.js'></script>
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

                    <?php include 'includes/nav.php'; ?>
                </div>
                <!-- END INNER HEADER -->
            </div>
            <!-- END HEADER -->

            <!-- BEGIN MAIN -->
            <div class='main'>
                <!-- BEGIN PLAYERS -->
                <div class='players'>
                    <p><span class='players-number'>4,735</span>&nbsp;already playing!</p>
                </div>
                <!-- END PLAYERS -->

                <!-- BEGIN INNER MAIN -->
                <div class='__main'>
                    <!-- BEGIN BACKGROUND -->
                    <div class='background'>
                        <div class='left'></div>
                        <div class='right'></div>
                    </div>
                    <!-- END BACKGROUND -->

                    <!--  BEGIN ANY INFORMATION -->
                    <div class='info'>
                        <h2>Get <span class='red big'>Real Money</span></h2>
                        <h3>for your tournament skills</h3>
                        <p class='before-join-us'>Try now and get a 60% top-up bonus</p>
                        <div class='join-us'>
                            <?php if(isset($_SESSION['user'])) : ?>
                            <a href='/profile'>My profile</a>
                            <?php else : ?>
                            <?php if($_COOKIE['reg'] == 1) : ?>
                            <a href='/account/login'>Join us now!</a>
                            <?php else : ?>
                            <a href='/account/create'>Join us now!</a>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <p class='after-join-us'>It's completely free</p>
                    </div>
                    <!-- END ANY INFORMATION -->
                </div>
                <!-- END INNER MAIN -->
            </div>
            <!-- END MAIN -->
            

            <!-- BEGIN PRO PLAYERS -->
            <div class='pro-players'>
                <!-- BEGIN INNER PRO PLAYERS -->
                <div class='__pro-players'>
                    <h2>Tournaments for pro players <br>and noobs <span class='red big'>Every day</span></h2>
                    <p>Everyone has a chance to win, find your own way to beat your opponents!</p>
                    
                    <!-- BEGIN VARIANTS -->
                    <div class='variants'>
                        <!-- BEGIN FORMATS -->
                        <div class='formats' id='formats'>
                            <h3>A variety of formats</h3>
                            <p class='description'>In kills tournaments you are paid for every kill,<br>
                                in make-it-to-the-top tournaments you need to survive, you don’t even need to shoot a single bullet</p>
                        </div>
                        <!-- END FORMATS -->
                        
                        <!-- BEGIN RATINGS -->
                        <div class='ratings' id='ratings'>
                            <h3>Daily ratings</h3>
                            <p class='description'>Leaderboards are updated after each tournament, <br>
                            get inspired by the best players and become one of them</p>
                        </div>
                        <!-- END RATINGS -->

                        <!-- BEGIN PAYOUTS -->
                        <div class='payouts' id='payouts'>
                            <h3>Easy payouts</h3>
                            <p class='description'>We transfer money via PayPal within 24 hours</p>
                        </div>
                        <!-- END PAYOUTS -->
                    </div>
                    <!-- END VARIANTS -->
                </div>
                <!-- END INNER PRO PLAYERS -->
            </div>
            <!-- END PRO PLAYERS -->
            <div class='clear'></div>

            <!-- TOP PLAYERS-->

            <!-- END TOP PLAYERS-->
            <div class="top_players">
                <h2>Топ 10 игроков</h2>
                <div class="variants_top">
                    <a data-top="score">По очкам</a>
                    <a class="active" data-top="balance">По балансу</a>
                </div>
                <div id="top_users">
                    <div data-top="score" style="display: none">
                        <?php
                        $top_score=R::getAll('SELECT * FROM users WHERE score ORDER BY score DESC LIMIT 10');
                        $i = 0;
                        foreach ($top_score as $item) :
                            $i++;
                            ?>

                            <div class="user_top">
                                <div>
                                    <span class="mesto"><?php echo $i ?>.</span> Player_<?php echo $item['player_id'] ?>
                                </div>
                                <div>
                                    <?php echo $item['score'] ?> очков
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                    <div data-top="balance">
                        <?php
                        $top_balance=R::getAll('SELECT * FROM users WHERE balance ORDER BY balance DESC LIMIT 10');
                        $i = 0;
                        foreach ($top_balance as $item) :
                            $i++;
                        ?>

                            <div class="user_top">
                                <div>
                                    <span class="mesto"><?php echo $i ?>.</span> Player_<?php echo $item['player_id'] ?>
                                </div>
                                <div>
                                    <?php echo $item['balance'] ?> руб
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
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
        <!-- END WRAPPER -->
        <script>
            $('[data-top]').click(function () {
                $('[data-top]').removeClass('active');
                $(this).addClass('active');
                $('#top_users [data-top]').hide();
                $('#top_users [data-top="'+$(this).attr('data-top')+'"]').show();
            });
        </script>
    </body>
</html>