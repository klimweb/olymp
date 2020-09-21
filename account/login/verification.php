<?php
    include '../../includes/db.php';

    $data = $_POST;

        if ( isset($data['do_log-in']) ) {
            $errors = array();

            $user = R::findOne('users', 'email = ?', array($data['email']));

            if ($user) {
                if($data['password'] == $user->password) {
                    $_SESSION['user'] = $user;
                    header('Location: /profile/');
                } else {
                    $error = 'Неправильный пароль!';
                    header('Location: /account/login?error='.$error);
                }
            } else {
                $error = 'Мы не смогли найти пользователя с таким адресом эл.почты!';
                header('Location: /account/login?error='.$error);
            }
        }

?>