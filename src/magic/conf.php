<?php

error_reporting(0);


 
   define("DS",DIRECTORY_SEPARATOR);
   define("ROOT_PATH",realpath(realpath(dirname(__FILE__)). DS . ".." . DS));


    defined("View_PATH")
        ||
        define("View_PATH",ROOT_PATH.DS.'demo'.DS.'views');

    defined("_View")
        ||
        define("_View",".magic");

    /*-------   Library Directory (All your defined php files to include to all project )   -------*/
   defined("Library_PATH")
		||
		define("Library_PATH",ROOT_PATH.DS.'src'.DS.'magic');


/*-------   Suffix Methods   -------*/
	
			/*---- This active all get names and url Convert to low string.  prefix of (controller , module , view ) names   
							| for example : Name_controller.php -> name_controller.php | <?php class Name...* -> name...* |  ---*/
	defined("Strlower")
		||	define("Strlower", 1);
	


        /*------- default Root (This is for default mvc router redirect )
                   for example mysite.com/article/view/5 -> article = Class | view = Class->function | 5 = input method function view(5) ------ */

        defined("DefaultRouter")
            || define("DefaultRouter",1);




		
  
   
  set_include_path(implode(PATH_SEPARATOR, array(
		realpath(ROOT_PATH),
        realpath(View_PATH),
        realpath(Library_PATH),
		get_include_path(),
   )));




function __autoload($class_name)
{
    require_once($class_name.".php");
}


