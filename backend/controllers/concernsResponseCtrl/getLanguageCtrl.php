<?php

    declare(strict_types = 1);

    spl_autoload_register(static function($fqcn): void {
        $path = str_replace(['App', '\\'], ['backend', '/'], $fqcn).'.php';
        require_once('../../'.$path);
    });

    use App\Model\ConcernsResponses\ConcernsResponsesManage;
    use App\Exceptions\ConcernResponseExceptions\ConcernResponseExceptionsManage;


    function getLanguageCtrl()
    {
        $get_theme = new ConcernsResponsesManage();

        if(isset($_GET['idConcern']) && $_GET['idConcern'] > 0 && is_numeric($_GET['idConcern'])) {
            $idConcern = $_GET['idConcern'];

            $theme = $get_theme->getLanguage($idConcern);
        }
        else {
            throw new ConcernResponseExceptionsManage(ConcernResponseExceptionsManage::errorIdNotExist());
        }

        return $theme;
    }