<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['backend', '/'], $fqcn).'.php';
        require_once('../../'.$path);
    });

    use App\Model\Users\UsersManage;
    use App\Exceptions\UsersSettingExceptions\EmailExceptionsManage;

    function updatingEmailCtrl(): void
    {
        $email_updating = new UsersManage();

        $user_id = $_SESSION['id'];

        if(isset($user_id) && $user_id > 0 && is_numeric($user_id)) {

            if(isset($_POST['new_email'])) {
                $new_email = htmlspecialchars($_POST['new_email']);

                if(preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $new_email)){
                    foreach ($email_updating->getUserData() as $checkForEmail) {
                        if ($new_email === $checkForEmail['f_email']) {
                            throw new EmailExceptionsManage($new_email.EmailExceptionsManage::emailAlreadyExists());
                        }
                    }

                    $email_updating->updatingEmail($new_email, $user_id);
                }
                else {
                    throw new EmailExceptionsManage(EmailExceptionsManage::errorEmailFormat());
                }
            }
        }
        else {
            throw new EmailExceptionsManage(EmailExceptionsManage::userIdNotExists());
        }
    }