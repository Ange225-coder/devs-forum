<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['backend', '/'], $fqcn).'.php';
        require_once('../../../../'.$path);
    });

    use App\Model\Users\UsersManage;

    function get_a_userCtrl()
    {
        $user_registration_date = new UsersManage();

        $email = $_SESSION['email'];

        return $user_registration_date->get_a_user($email);


    }