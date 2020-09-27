<?php
    // session_start();
    // $_SESSION['logged_user'] = $username;
    // $_SESSION['logged_user'] = $password;
    // $_SESSION['logged_user'] = $email;

    // if ( isset($_SESSION['logged_user']) ) {
        
    // } else {
        
    // }
?>

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
        <link rel='stylesheet' type='text/css' href='../assets/css/style.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/style.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/media-queries.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/slick.css'>
        <link rel='stylesheet' type='text/css' href='assets/css/slick-theme.css'>
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
                    <?php include '../includes/nav.php'; ?>
                </div>
                <!-- END INNER HEADER -->
            </div>
            <!-- END HEADER -->
            
            <?php
            $my_tours = R::getAll('SELECT * FROM toursbuy WHERE uid = :uid ORDER BY id ASC', ['uid' => $user->id]);
            if ($my_tours) :
            ?>
            <!-- BEGIN NEXT HOUR BLOCK -->
            <div class='next-hour'>
                <h2 style="margin-top: 50px; font-size: 18px">Ваш баланс: <?php echo $user->balance; ?> руб.</h2>
                <!-- BEGIN INNER NEXT HOUR BLOCK -->
                <div class='__next-hour'>
                    <h2>Next hour</h2>
                    <div class='h-line'></div>
                    <!-- BEGIN GAMES -->
                    <div class='games'>
                        <?php
                        $items = R::getAll('SELECT * FROM toursbuy WHERE uid = :uid ORDER BY id ASC', ['uid' => $user->id]);
                        $next_hour = 0;
                        foreach ($items as $item) :

                        $tournament = R::findOne('tournaments', 'id = ?', array($item['tid']));

                        if ($tournament->data < time()+3600 && $tournament->data > time()) :
                        $next_hour++;

                        $tournament->prize = json_decode($tournament->prize);
                        $prize = 0;
                        foreach ($tournament->prize as $summ) {
                            $prize += $summ;
                        }
                        $date = getdate($tournament->data);
                        $players = R::getAll('SELECT * FROM toursbuy WHERE tid = ?', array($tournament->id));
                        $players = count($players);
                        ?>
                        <div class='game game-type'>
                            <div class='area-1'>
                                <div class='game-image'></div>
                                <span class='date'><?php echo $date['mday'].' '.$date['month'].', AT '; ?> <span class='time'><?php echo $date['hours'].':'.$date['minutes']; ?></span></span>
                                <span class='name'><?php echo $tournament->name; ?></span>
                                <span class='game-description'>Tournament organizer Spartans</span>
                                <p><input type='button' value='Получить id и пароль'></p>
                            </div>
                            <div class='area-2'>
                                <span class='price'><?php echo $prize ?>&nbsp;<span class='payment_type'>руб.</span></span><br>
                                <span class='any-description'>Prize pool</span>
                            </div>
                            <div class='area-3'>
                                <span class='price'><?php echo $players; ?>&nbsp;&frasl;<?php echo $tournament->players ?>&nbsp;Players</span><br>
                                <span class='any-description'></span>
                            </div>
                            <div class='area-4'>
                                <span class='price'>1 vs all</span><br>
                                <span class='any-description'></span>
                            </div>

                            <div class='game-status' hidden>

                                <div class='stat-1'>
                                    <span class='price'><?php echo $tournament->prize[0]; ?> руб.</span>
                                </div>
                                <div class='stat-2'>
                                    <span class='price'><?php echo $tournament->prize[1]; ?> руб.</span>
                                </div>
                                <div class='stat-3'>
                                    <span class='price'><?php echo $tournament->prize[2]; ?> руб.</span>
                                </div>
                                <?php if (count($tournament->prize) > 3) : ?>
                                <div class='any-desc'>
                                    <span class='prizes'>and <?php echo count($tournament->prize)-3; ?> prizes places</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class='h-line'></div>
                        <?php endif; endforeach; ?>

                        <?php if ($next_hour == 0) : ?>
                            <div style="text-align: center;">
                                <h2 style="font-size: 16px; opacity: 0.7">Больше нет турниров в ближайший час</h2>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- END GAMES -->
                </div>
                <!-- END INNER NEXT HOUR BLOCK -->
            </div>
            <!-- END NEXT HOUR BLOCK -->
            <?php //endif; ?>

            <!-- BEGIN TOMORROW BLOCK -->
            <div class='next-hour tomorrow'>
                <!-- BEGIN INNER TOMORROW BLOCK -->
                <div class='__next-hour in-tomorrow'>
                    <h2>Tomorrow</h2>
                    <div class='h-line'></div>
                    <!-- BEGIN GAMES -->
                    <div class='games'>
                        <?php
                        $items = R::getAll('SELECT * FROM toursbuy WHERE uid = :uid ORDER BY id ASC', ['uid' => $user->id]);
                        $tommorow = 0;
                        foreach ($items as $item) :

                        $tournament = R::findOne('tournaments', 'id = ?', array($item['tid']));

                        if ($tournament->data < time()+86400 && $tournament->data > time() + 3600) :
                        $tommorow++;

                        $tournament->prize = json_decode($tournament->prize);
                        $prize = 0;
                        foreach ($tournament->prize as $summ) {
                            $prize += $summ;
                        }
                        $date = getdate($tournament->data);
                        $players = R::getAll('SELECT * FROM toursbuy WHERE tid = ?', array($tournament->id));
                        $players = count($players);
                        ?>
                        <div class='game game-type'>
                            <div class='area-1'>
                                <div class='game-image'></div>
                                <span class='date'><?php echo $date['mday'].' '.$date['month'].', AT '; ?> <span class='time'><?php echo $date['hours'].':'.$date['minutes']; ?></span></span>
                                <span class='name'><?php echo $tournament->name; ?></span>
                                <span class='game-description'>Tournament organizer Spartans</span>
                                <p><input type='button' value='Получить id и пароль'></p>
                            </div>
                            <div class='area-2'>
                                <span class='price'><?php echo $prize ?>&nbsp;<span class='payment_type'>руб.</span></span><br>
                                <span class='any-description'>Prize pool</span>
                            </div>
                            <div class='area-3'>
                                <span class='price'><?php echo $players; ?>&nbsp;&frasl;<?php echo $tournament->players ?>&nbsp;Players</span><br>
                                <span class='any-description'></span>
                            </div>
                            <div class='area-4'>
                                <span class='price'>1 vs all</span><br>
                                <span class='any-description'></span>
                            </div>

                            <div class='game-status' hidden>

                                <div class='stat-1'>
                                    <span class='price'><?php echo $tournament->prize[0]; ?> руб.</span>
                                </div>
                                <div class='stat-2'>
                                    <span class='price'><?php echo $tournament->prize[1]; ?> руб.</span>
                                </div>
                                <div class='stat-3'>
                                    <span class='price'><?php echo $tournament->prize[2]; ?> руб.</span>
                                </div>
                                <?php if (count($tournament->prize) > 3) : ?>
                                <div class='any-desc'>
                                    <span class='prizes'>and <?php echo count($tournament->prize)-3; ?> prizes places</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class='h-line'></div>
                        <?php endif; endforeach; ?>

                        <?php if ($tommorow == 0) : ?>
                            <div style="text-align: center;">
                                <h2 style="font-size: 16px; opacity: 0.7">Больше нет турниров сегодня</h2>
                            </div>
                        <?php endif; ?>

                    </div>
                    <!-- END GAMES -->
                </div>
                <!-- END INNER TOMORROW BLOCK -->
            </div>
            <!-- END TOMORROW BLOCK -->
            <?php else : ?>
                <div style="text-align: center;margin-top: 50px">
                    <h2 style="font-size: 18px; opacity: 0.7">Вы ещё не учавствовали в турнирах</h2>
                </div>
            <?php endif; ?>

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

        <script src='assets/js/slick.min.js'></script>
    </body>
</html>