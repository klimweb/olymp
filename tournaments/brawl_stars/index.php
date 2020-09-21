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
        <!-- END CONNECTION STYLESHEETS -->

        <!-- BEGIN CONNECTION SCRIPTS -->
        <script src='../../profile/assets/js/jquery-3.5.1.min.js'></script>
        <script src='../../profile/assets/js/script.js'></script>
        <!-- END CONNECTION SCRIPTS -->
    </head>
    <body>
        <!-- BEGIN WRAPPER -->
        <div class='wrapper'>
            <!--<div class='header'>
                <div class='__header'>
                    <div class='logo-brand'>
                        <a href='/' target='_self'></a>
                    </div>
                    <ul class='navigation' role='navigation'>
                        <li><a href='#' target='_self' class='left-border tournaments'>Tournaments</a></li>
                        <li><a href='#' target='_self'>Ratings</a></li>
                    </ul>

                    <div class='profile'>
                        <div class='login authorization'>
                            <a href='/account/login/'>Log in</a>
                        </div>
                        <div class='create register'>
                            <a href='/account/create/'>Create account</a>
                        </div>
                    </div>
                </div>
            </div>-->
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
            <!-- BEGIN SLICK / SLICK CONTENT -->
            <div class='slick slick-content'>
                <!-- BEGIN SLIDE BUTTONS -->
                <div class='arrows'>
                    <div class='go-left'>
                        <a href='#'></a>
                    </div>
                    <div class='go-right'>
                        <a href='#'></a>
                    </div>
                </div>
                <!-- END SLIDE BUTTONS -->
                <!-- BEGIN SLIDER -->
                <div class='slider single-item'>
                    <div class='_one-moment'>
                        <div class='info'>
                            <span class='time'>15 JULY, 2020 <span class='hours'>AT:&nbsp;<span class='insert-hours'>15:06</span></span></span>
                            <h2>Top Challenge #2</h2>
                            <p>kills &bull;&nbsp;11&nbsp;&nbsp;&frasl;&nbsp;&nbsp;8&nbsp;&bull;&nbsp;kill = <span class='price'>30 <span class='payment_type'>руб</span></span></p>
                            <p><input type='button' value='Participate for 1 ticket'><span class='rules'>By pressing the button,<br>you agree to the <a href='#' target='_blank'>Tournament Rules</a></span></p>
                            <span class='tour-info'>Tournament info</span>
                        </div>
                    </div>
                    <div class='_two-moment'>
                        <div class='info'>
                            <span class='time'>18 JULY, 2020 <span class='hours'>AT:&nbsp;<span class='insert-hours'>13:00</span></span></span>
                            <h2>Sollo Kill Cup #2</h2>
                            <p>kills &bull;&nbsp;11&nbsp;&nbsp;&frasl;&nbsp;&nbsp;48&nbsp;&bull;&nbsp;kill = <span class='price'>90 <span class='payment_type'>руб</span></span></p>
                            <p><input type='button' value='Participate for 1 ticket'><span class='rules'>By pressing the button,<br>you agree to the <a href='#' target='_blank'>Tournament Rules</a></span></p>
                            <span class='tour-info'>Tournament info</span>
                        </div>
                    </div>
                    <div class='_three-moment'>
                        <div class='info'>
                            <span class='time'>20 JULY, 2020 <span class='hours'>AT:&nbsp;<span class='insert-hours'>20:00</span></span></span>
                            <h2>Зелибобчик TV 24 Challenge #2</h2>
                            <p>1 vs all &bull;&nbsp;7&nbsp;&nbsp;&frasl;&nbsp;&nbsp;48&nbsp;&bull;&nbsp;Prize pool = <span class='price'>1,440 <span class='payment_type'>руб</span></span></p>
                            <p><input type='button' value='Participate for 1 ticket'><span class='rules'>By pressing the button,<br>you agree to the <a href='#' target='_blank'>Tournament Rules</a></span></p>
                            <span class='tour-info'>Tournament info</span>
                        </div>
                    </div>
                    <div class='_four-moment'>
                        <div class='info'>
                            <span class='time'>15 JULY, 2020 <span class='hours'>AT:&nbsp;<span class='insert-hours'>15:06</span></span></span>
                            <h2>Top Challenge #2</h2>
                            <p>1 vs all &bull;&nbsp;9&nbsp;&nbsp;&frasl;&nbsp;&nbsp;48&nbsp;&bull;&nbsp;Prize pool = <span class='price'>1,540 <span class='payment_type'>руб</span></span></p>
                            <p><input type='button' value='Participate for 1 ticket'><span class='rules'>By pressing the button,<br>you agree to the <a href='#' target='_blank'>Tournament Rules</a></span></p>
                            <span class='tour-info'>Tournament info</span>
                        </div>
                    </div>
                </div>
                <!-- END SLIDER -->
            </div>
            <!-- END SLICK / SLICK CONTENT -->
            <script>
                $(document).ready(function(){

                    var left  = $('.go-left');
                    var right = $('.go-right');

                    $('.slider').slick({
                        infinitive    : true,
                        loop          : true,
                        autoplay      : true,
                        nav           : false,
                        dots          : false,
                        arrow         : true,
                        prevArrow     : left,
                        nextArrow     : right,
                        slidesToShow  : 1,
                        speed         : 1200,
                        autoplaySpeed : 2500,
                    });

                    $('.slider').slick(); /* Activate slick */
                
                });
                    
            </script>

            <?php
            $game = "Brawl Stars";
            $next_hour = R::getAll('SELECT * FROM tournaments WHERE game = :game AND data < :date_hour and data > :time_only', [':game' => $game, ':date_hour' => time()+3600, 'time_only' => time()]);
            if ($next_hour) :
            ?>
            <!-- BEGIN NEXT HOUR BLOCK -->
            <div class='next-hour'>
                <!-- BEGIN INNER NEXT HOUR BLOCK -->
                <div class='__next-hour'>
                    <h2>Next hour</h2>
                    <div class='h-line'></div>
                    <!-- BEGIN GAMES -->
                    <div class='games'>
                        <?php
                        $items = R::getAll('SELECT * FROM tournaments WHERE game = :game AND data < :date_hour and data > :time_only ORDER BY data ASC', [':game' => $game, ':date_hour' => time()+3600, 'time_only' => time()]);
                        foreach ($items as $item) :
                        $item['prize'] = json_decode($item['prize']);
                        $prize = 0;
                        foreach ($item['prize'] as $summ) {
                            $prize += $summ;
                        }
                        $date = getdate($item['data']);
                        ?>
                        <div class='game game-type'>
                            <div class='area-1'>
                                <div class='game-image'></div>
                                <span class='date'><?php echo $date['mday'].' '.$date['month'].', AT '; ?> <span class='time'><?php echo $date['hours'].':'.$date['minutes']; ?></span></span>
                                <span class='name'><?php echo $item['name']; ?></span>
                                <span class='game-description'>Tournament organizer Spartans</span>
                                <p><input type='button' value='Participate for 1 ticket'></p>
                            </div>
                            <div class='area-2'>
                                <span class='price'><?php echo $prize ?>&nbsp;<span class='payment_type'>руб.</span></span><br>
                                <span class='any-description'>Prize pool</span>
                            </div>
                            <div class='area-3'>
                                <span class='price'>0&nbsp;&frasl;<?php echo $item['players'] ?>&nbsp;Players</span><br>
                                <span class='any-description'></span>
                            </div>
                            <div class='area-4'>
                                <span class='price'>1 vs all</span><br>
                                <span class='any-description'></span>
                            </div>

                            <div class='game-status' hidden>
                                <div class='stat-1'>
                                    <span class='price'><?php echo $item['prize'][0]; ?> руб.</span>
                                </div>
                                <div class='stat-2'>
                                    <span class='price'><?php echo $item['prize'][1]; ?> руб.</span>
                                </div>
                                <div class='stat-3'>
                                    <span class='price'><?php echo $item['prize'][2]; ?> руб.</span>
                                </div>
                                <?php if (count($item['prize']) > 3) : ?>
                                <div class='any-desc'>
                                    <span class='prizes'>and <?php echo count($item['prize'])-3; ?> prizes places</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class='h-line'></div>
                        <?php endforeach; ?>
                    </div>
                    <!-- END GAMES -->
                </div>
                <!-- END INNER NEXT HOUR BLOCK -->
            </div>
            <!-- END NEXT HOUR BLOCK -->
            <?php endif; ?>

            <?php
            $tomorrow = R::getAll('SELECT * FROM tournaments WHERE game = :game AND data < :date_24hour and data > :time_only ORDER BY data ASC', [':game' => $game, ':date_24hour' => time()+86400, 'time_only' => time()]);
            if($tomorrow) :
            ?>
            <!-- BEGIN TOMORROW BLOCK -->
            <div class='next-hour tomorrow'>
                <!-- BEGIN INNER TOMORROW BLOCK -->
                <div class='__next-hour in-tomorrow'>
                    <h2>Tomorrow</h2>
                    <div class='h-line'></div>
                    <!-- BEGIN GAMES -->
                    <div class='games'>
                        <?php
                        $items = R::getAll('SELECT * FROM tournaments WHERE data < :date_24hour and data > :time_only ORDER BY data ASC', [':date_24hour' => time()+86400, 'time_only' => time()]);
                        foreach ($items as $item) :
                        $date = getdate($item['data']);
                        ?>
                        <div class='game game-type'>
                            <div class='area-1'>
                                <div class='game-image'></div>
                                <span class='date'><?php echo $date['mday'].' '.$date['month'].', AT '; ?> <span class='time'><?php echo $date['hours'].':'.$date['minutes']; ?></span></span>
                                <span class='name'><?php echo $item['name']; ?></span>
                                <span class='game-description'>Tournament organizer Spartans</span>
                                <p><input type='button' value='Participate for 1 ticket'></p>
                            </div>
                            <div class='area-2'>
                                <span class='price'><?php echo $item['prize'] ?>&nbsp;<span class='payment_type'>руб.</span></span><br>
                                <span class='any-description'>Prize pool</span>
                            </div>
                            <div class='area-3'>
                                <span class='price'>0&nbsp;&frasl;<?php echo $item['players'] ?>&nbsp;Players</span><br>
                                <span class='any-description'></span>
                            </div>
                            <div class='area-4'>
                                <span class='price'>1 vs all</span><br>
                                <span class='any-description'></span>
                            </div>

                            <div class='game-status' hidden>
                                <div class='stat-1'>
                                    <span class='price'><?php echo $item['prize'][0]; ?> руб.</span>
                                </div>
                                <div class='stat-2'>
                                    <span class='price'><?php echo $item['prize'][1]; ?> руб.</span>
                                </div>
                                <div class='stat-3'>
                                    <span class='price'><?php echo $item['prize'][2]; ?> руб.</span>
                                </div>
                                <?php if (count($item['prize']) > 3) : ?>
                                <div class='any-desc'>
                                    <span class='prizes'>and <?php echo count($item['prize'])-3; ?> prizes places</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class='h-line'></div>
                        <?php endforeach; ?>
                    </div>
                    <!-- END GAMES -->
                </div>
                <!-- END INNER TOMORROW BLOCK -->
            </div>
            <!-- END TOMORROW BLOCK -->
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

        <script>
        $('.game').hover(function () {
            $(this).find('.game-status').removeAttr('hidden').css('opacity', '0.7');
        }, function () {
            $(this).find('.game-status').attr('hidden', 'hidden');
        } );
        </script>

        <script src='../../profile/assets/js/slick.min.js'></script>
    </body>
</html>