<?php

    spl_autoload_register('autoload');

    function autoLoad($className) {
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if(strpos($url, 'includes') != false){
            $path = '../classes/';
        }else{
            $path = 'classes/';
        }
        $ex = '.class.php';
        $fullpath = $path . $className . $ex;

        include_once $fullpath;
    }