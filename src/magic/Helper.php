<?php

abstract class Helper
{
	static public function Do_array($array)
	{
		return (!is_array($array))? array($array) : $array ;
	}
	static public function Definelow($string)
	{
		return (
				(Strlower == 1) ? strtolower($string) : $string
		);
	}
	static public function Fixview($view)
    {
        return str_replace(".",DS,$view);
    }
	static public function viewer($file,$set =['var'=>'','data' => []])
	{
		$view = new View();
		$view->set($set['var'],$set['data']);
		$view->render($file);
	}
}
