<?php include 'db.php'; ?>
<!-- BEGIN NAVIGATION -->
                    <div class='navigation'>
                        <ul>
                            <li><a target='_self' href='/'  class='active left-border' >Tournaments</a>
                                <ul class='dropdown-menu'>
                                    <li class='pubg'><a class='pubg'                   target='_self' href='/tournaments/pubg_mobile'>
                                        <span>PUBG MOBILE</span>
                                    </a>
                                    </li>

                                    <li class='call-of-duty'><a class='call-of-duty'   target='_self' href='/tournaments/call_of_duty'>
                                        <span>Call of Duty</span>
                                    </a>
                                    </li>

                                    <li class='garena'><a class='garena'               target='_self' href='/tournaments/garena_fire_free'>
                                        <span>Garena Fire Free</span>
                                    </a>
                                    </li>

                                    <li class='brawl'><a class='brawl'                 target='_self' href='/tournaments/brawl_stars'>
                                        <span>Brawl Stars</span>
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <?php if(isset($_SESSION['user'])) : ?>
                            <li><a target='_self' href='/services/' class='services'    >Challenges</a>
                                <ul class='dropdown-menu'>
                                    <li class='pubg'><a class='pubg'                    target='_self' href='#'>
                                        <span>PUBG MOBILE</span>
                                    </a>
                                    </li>

                                    <li class='call-of-duty'><a class='call-of-duty'    target='_self' href='#'>
                                        <span>Call of Duty</span>
                                    </a>
                                    </li>

                                    <li class='garena'><a class='garena'                target='_self' href='#'>
                                        <span>Garena Fire Free</span>
                                    </a>
                                    </li>

                                    <li class='brawl'><a class='brawl'                  target='_self' href='#'>
                                        <span>Brawl Stars</span>
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <?php endif; ?>
                            <li><a target='_self' href='/services/' class='services'    >Ratings</a>
                                <ul class='dropdown-menu'>
                                    <li class='pubg'><a class='pubg'                    target='_self' href='#'>
                                        <span>PUBG MOBILE</span>
                                    </a>
                                    </li>

                                    <li class='call-of-duty'><a class='call-of-duty'    target='_self' href='#'>
                                        <span>Call of Duty</span>
                                    </a>
                                    </li>

                                    <li class='garena'><a class='garena'                target='_self' href='#'>
                                        <span>Garena Fire Free</span>
                                    </a>
                                    </li>

                                    <li class='brawl'><a class='brawl'                  target='_self' href='#'>
                                        <span>Brawl Stars</span>
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END NAVIGATION -->
                    <?php if(!isset($_SESSION['user'])) : ?>
                    <!-- BEGIN USER ACCOUNT -->
                    <div class='user-account'>
                        <div class='sign-in log-in'>
                            <a href='/account/login/'>Log in</a>
                        </div>
                        
                        <div class='register'>
                            <a href='/account/create/'>Create account</a>
                        </div>
                    </div>
                    <!-- END USER ACCOUNT -->
                    <?php else : ?>
                    <!-- BEGIN USER ACCOUNT -->
                    <div class='user-account logged'>
                        <div class='notification'>
<!--                            <a href='/account/notification/'></a>-->
                            <a href="#"></a>
                        </div>

                        <div class='sign-in log-in signed'>
                            <a href='/profile'><span style="line-height: 17px; top: 16px;">Player_<?php echo $_SESSION['user']['player_id']; ?><br>
                            <?php echo $user->balance; ?> руб.</span></a>
                            
                        </div>

                        <div class="notifications">
                            <div class="items">
                                <?php
                                $notifications = R::getAll('SELECT * FROM notifications WHERE uid = ? ORDER BY id DESC LIMIT 10', array($user->id));
                                foreach ($notifications as $notification) :
                                ?>
                                <a class="item">
                                    <?php echo $notification['txt']; ?>
                                </a>
                                <?php
                                endforeach;
                                if (count($notifications) < 1) :
                                ?>
                                <p style="text-align: center;margin-top: 20px;font-size: 16px;opacity: 0.5;">У вас пока нет уведомлений</p>
                                <?php
                                endif;
                                ?>
                            </div>
                            <a href="/account/notifications/" class="view_all">Посмотреть все уведомления</a>
                        </div>
                    </div>
                    <!-- END USER ACCOUNT -->

    <script src='/assets/js/jquery.toShowHide.js'></script>
    <script>
        $('.user-account').toShowHide({
            method: 'click',
            button: '.notification a',
            box: '.notifications',
            effect: 'fade',
            anim_speed: 100,
            delay: 0,
            onBefore: function(e) {
                
            },
            onAfter: function(e) {

            }
        });
    </script>
                    <?php endif; ?>