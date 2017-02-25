<?php
/**
 * Created by PhpStorm.
 * User: k3en
 * Date: 12/08/2016
 * Time: 08:29 PM
 */
Class Load
{
    static public function viewer($file,$set =['var'=>'','data' => []])
    {
        $view = new View();
        $view->set($set['var'],$set['data']);
        $view->render($file);
    }
}