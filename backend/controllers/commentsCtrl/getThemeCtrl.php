<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['backend', '/'], $fqcn).'.php';
        require_once('../../'.$path);
    });

    use App\Model\Comments\CommentsManage;
    use App\Exceptions\CommentsExceptions\CommentsExceptionsManage;

    function getThemeCtrl()
    {
        $getting_theme = new CommentsManage();

        if(isset($_GET['idPost']) && $_GET['idPost'] > 0 && is_numeric($_GET['idPost'])) {

            $idPost = $_GET['idPost'];
            $get_theme = $getting_theme->getTheme($idPost);
        }
        else {
            throw new CommentsExceptionsManage(CommentsExceptionsManage::errorIdPostNotExist());
        }

        return $get_theme;
    }