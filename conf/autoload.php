<?php
class Autoloader
{

    static function register()
    {
        spl_autoload_register(array(__CLASS__, "autoload"));
    }
    static function autoload($class)
    {
        $sn = str_replace("\\", "/",$class);
        //echo __DIR__.$sn.".php";
        //echo $sn;
        //die();

        $sd = str_replace("\\", "/", __DIR__.$sn.".php");
        $dr = str_replace("conf","", $sd);
        // var_dump($dr);
        // die();
        // 
        require $dr;

       /* //echo str_replace("\\", "/",$class);
        if (file_exists("model/" . $class . ".php")) {
            require_once "model/" . $class . ".php";
        } 
        elseif (file_exists("controller/" . $class . ".php")) {
            require_once "controller/" . $class . ".php";
        }
        // namespace

        if(file_exists(str_replace("\\", "/",$class.".php"))){
            require_once str_replace("\\", "/",$class.".php");
        }
        // else{
        //     die("Merci d'utiliser le mot cle USE suivi de ".$class);
        // }*/
    }
}
Autoloader::register();
?>