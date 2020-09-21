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
                            <a href='/account/notification/'></a>
                        </div>

                        <div class='sign-in log-in signed'>
                            <a href='/profile'><span style="line-height: 17px; top: 16px;">Player_<?php echo $_SESSION['user']['player_id']; ?><br>
                            <?php echo $user->balance; ?> руб.</span></a>
                            
                        </div>
                    </div>
                    <!-- END USER ACCOUNT -->
                    <?php endif; ?>