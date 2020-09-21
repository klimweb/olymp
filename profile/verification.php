<?php
    require('../includes/db.php');

    $data = $_POST;

        if ( isset($data['do_create']) ) {
            // Client registration

            $errors = array();
            if ( trim($data['username']) == '' ) {
                $errors[] = 'Enter your username, please!';
            }

            if ( trim($data['email']) == '' ) {
                $errors[] = 'Enter your email address, please!';
            }

            if ( $data['password'] == '' ) {
                $errors[] = 'Enter your password, please!';
            }

            if ( $data['confirm_password'] != $data['password'] ) {
                $errors[] = 'Re-the password is incorrect!';
            }

            if ( R::count('users', 'email = ?', array($data['email'])) > 0) {
                $errors[] = 'A user with this Email address already exists!';
            }

            if ( R::count('users', 'username = ?', array($data['username'])) > 0) {
                $errors[] = 'A user with this username already exists!';
            }

            if ( empty($errors) ) {
                // Ok, go to register

                $user = R::dispense('users');
                $user->player_id = rand(1111111111, 9999999999);
                $user->username  = $data['username'];
                $user->password  = $data['password'];
                $user->email     = $data['email'];
                R::store($user);

                header('Location: /profile/');

            } else {
                echo array_shift($errors);
            }

        }
?>