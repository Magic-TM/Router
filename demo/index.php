<?php

	include_once("../src/magic/conf.php");


    Router::get("/",function (){
        return Helper::viewer('users');
    });

    Router::get('/Test/Hello',function (){
            echo "hello";
    });

    Router::get('/Run/$',function ($hi = 5){
        if($hi == 1)
            echo "1";
        else
            echo "10";
    });

    /* --  Load 404 file from views Directory   -- */
    Router::Run("404");








