<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Olymp Games | Log in</title>
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
                    
                    <?php include '../../includes/nav.php'; ?>
                    <?php if(isset($_SESSION['logged_user'])) {
                        header('Location: /profile/');
                    } ?>
                </div>
                <!-- END INNER HEADER -->
            </div>
            <!-- BEGIN MAIN -->
            <div class='main'>
                <!-- BEGIN INNER MAIN -->
                <div class='__main'>
                    <div class='login_fields'>
                        <h2>Log in your account</h2>
                        <form method='POST' name='log-in' action='verification.php'>
                            <p><input value='<?php @$data['email'] ?>'    onkeydown="return keyDown.call(this,event)" onchange="value = value.replace(/^\s+/,'')" type='text'     name='email'     class='user_email'        placeholder='*&nbsp;Email-address'></p>
                            <p><input value='<?php @$data['password'] ?>' onkeydown="return keyDown.call(this,event)" onchange="value = value.replace(/^\s+/,'')" type='password' name='password'  class='user_password'     placeholder='*&nbsp;Your password'></p>
                            <?php if (isset($_GET['error'])) : ?>
                                <p style="color: #F22613;margin-top: -34px;margin-bottom: 17px;font: bold 16px Lato, Arial, sans-serif;"><?php echo $_GET['error']; ?></p>
                            <?php endif; ?>
                            <p><input                                     type='submit'   name='do_log-in' class='submit' value='Log in'></p>
                        </form>

                <!-- BEGIN SCRIPT -->
                <script>
                    function keyDown(e){
                    var position = 'selectionStart' in this ? 
                        this.selectionStart :
                        Math.abs(document.selection.createRange().moveStart('character', -input.value.length)); //ie<9 
                    if(e.keyCode === 32 && position === 0) return false
                    }
                </script>
                <!-- END SCRIPT -->
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