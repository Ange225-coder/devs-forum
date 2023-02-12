<?php session_start();

    require_once('../controllers/usersCtrl/updatingEmailCtrl.php');
    require_once('../controllers/usersCtrl/updatingPwdCtrl.php');


    use App\Exceptions\UsersSettingExceptions\EmailExceptionsManage;
    use App\Exceptions\UsersSettingExceptions\PasswordExceptionsManage;

    if(isset($_GET['action'])) {

        /** updating email manage */
        try {
            if($_GET['action'] == 'updatingEmailCtrl') {
                updatingEmailCtrl();

                header('Location: ../../frontend/views/users/redirects/usersSettingRedirects/updatingEmailRedirect.php');
            }
        }
        catch(EmailExceptionsManage $e) {
            $error_updating_email = $e->getMessage();

            require_once('../../frontend/views/users/settings/usersSettings.php');
        }


        /** updating password manage */
        try {
            if($_GET['action'] == 'updatingPwdCtrl') {
                updatingPwdCtrl();

                header('location: ../../frontend/views/users/redirects/usersSettingRedirects/updatingPwdRedirect.php');
            }
        }
        catch(PasswordExceptionsManage $e) {
            $error_updating_pwd = $e->getMessage();

            require_once('../../frontend/views/users/settings/usersSettings.php');
        }
    }