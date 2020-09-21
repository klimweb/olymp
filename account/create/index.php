<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Olymp Games | Create game account</title>
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
                    
                    <!-- BEGIN NAVIGATION -->
                    <div class='navigation'>
                        <ul>
                            <li><a target='_self' href='/'  class='active left-border' >Tournaments</a>
                                <ul class='dropdown-menu'>
                                    <li class='pubg'><a class='pubg'                   target='_self' href='#'>
                                        <span>PUBG MOBILE</span>
                                    </a>
                                    </li>

                                    <li class='call-of-duty'><a class='call-of-duty'   target='_self' href='#'>
                                        <span>Call of Duty</span>
                                    </a>
                                    </li>

                                    <li class='garena'><a class='garena'               target='_self' href='#'>
                                        <span>Garena Fire Free</span>
                                    </a>
                                    </li>

                                    <li class='brawl'><a class='brawl'                 target='_self' href='#'>
                                        <span>Brawl Stars</span>
                                    </a>
                                    </li>
                                </ul>
                            </li>
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
                </div>
                <!-- END INNER HEADER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN MAIN -->
            <div class='main'>
                <!--  BEGIN INNER MAIN -->
                <div class='__main'>
                    <div class='login_fields'>
                        <h2>Create a <span>100% free gaming</span> account!</h2>
                        <form method='POST' name='do_register' action='verification.php'>
                            <p><input value='<?php @$data['username'] ?>'          onkeydown="return keyDown.call(this,event)" onchange="value = value.replace(/^\s+/,'')" type='text'     name='username'         class='username'               placeholder='*&nbsp;Username'></p>
                            <p><input value='<?php @$data['email'] ?>'             onkeydown="return keyDown.call(this,event)" onchange="value = value.replace(/^\s+/,'')" type='text'     name='email'            class='user_email'             placeholder='*&nbsp;Email-address'></p>
                            <p><input value='<?php @$data['password'] ?>'          onkeydown="return keyDown.call(this,event)" onchange="value = value.replace(/^\s+/,'')" type='password' name='password'         class='user_password'          placeholder='*&nbsp;Create a password'></p>
                            <p><input value='<?php @$data['confirm_password'] ?>'  onkeydown="return keyDown.call(this,event)" onchange="value = value.replace(/^\s+/,'')" type='password' name='confirm_password' class='user_password_confirm'  placeholder='*&nbsp;Confirm your password'></p>
                            <p>
                                <script>
                                    $(document).ready(function () {
                                        $('select').change(function () {
                                            if ($(this).val() == 'russia') {
                                                $('.login_fields select').css({
                                                    'background-image' : 'url(../images/flags/32/Aland.png)',
                                                })
                                            }
                                        } );
                                    } );

                    function keyDown(e){
                    var position = 'selectionStart' in this ? 
                        this.selectionStart :
                        Math.abs(document.selection.createRange().moveStart('character', -input.value.length)); //ie<9 
                    if(e.keyCode === 32 && position === 0) return false
                    }

                                </script>
                                <select <?php @$data['currency'] ?> id='currency' name='currency'>
                                    <option value='choose' selected='selected'>*&nbsp;Chosen currency</option>
                                    <option value='usd'>USD</option>
                                    <option value='ruble'>RUB</option>
                                    <option value='eur' >EUR</option>
                                </select>
                            </p>
                            <p><input type='submit' class='submit' name='do_create' value='Create account'></p>
                        </form>
                        </div>
                </div>
                <!-- END INNER MAIN -->
            </div>
            <!-- END MAIN -->
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
    </body>
</html>