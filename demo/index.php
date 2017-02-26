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

    Router::post('/Post',function (){
            include_once "directory/root/example";
    });

    Router::route('/Get&Post',function (){
            echo "This is Get | Post request ";
    });

    /* you can use a class from Defined Controller Folder directory from library/conf.php file
        change it to someone directory you needed
                ||
                \/
     */
    Router::get('/class','class@function');

    Router::get('/test','test@index');

    /* --  Load 404 file from views Directory   -- */
    Router::Run("404");








