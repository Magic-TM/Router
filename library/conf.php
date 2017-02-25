<?php

error_reporting(0);

    /* ----- http Run default root url ------ */
    defined('host')
        || define('host','localhost');

    defined("httpPort")
        || define("httpPort",8008);
    /* -------- / --------- */

 
   define("DS",DIRECTORY_SEPARATOR);
   define("ROOT_PATH",realpath(realpath(dirname(__FILE__)). DS . ".." . DS));

   /*-------   Controllers Directory (This is All your Actions , Processing and other classes and ... )   -------*/
   defined("Controllers_PATH")
		||
		define("Controllers_PATH",ROOT_PATH.DS.'controller');
		
    /*-------   Library Directory (All your defined php files to include to all project )   -------*/
   defined("Library_PATH")
		||
		define("Library_PATH",ROOT_PATH.DS.'library');
		
	/*-------   View Directory (All your User Interface * html-css  )   -------*/
   defined("View_PATH")
		||
		define("View_PATH",ROOT_PATH.DS.'views');

    /*------------ require blade ------------ */



/*-------   Suffix Methods   -------*/
	
			/*---- This active all get names and url Convert to low string.  prefix of (controller , module , view ) names   
							| for example : Name_controller.php -> name_controller.php | <?php class Name...* -> name...* |  ---*/
	defined("Strlower")
		||	define("Strlower", 1);
	
	
		/*-------   Suffix Controller (This is controller file extension and class controller extension ) 
						| for example : controller/article_controller.php | <?php class article_controller -------*/
   defined("_Control")
		|| define("_Control","_controller");

		
		/*-------   Suffix view (This is view file extension and Your template engine extension's file ) 
						| for example : module/view.magic.php | -------*/
		defined("_View")
		|| define("_View",".magic");



        /*------- default Root (This is for default mvc router redirect )
                   for example mysite.com/article/view/5 -> article = Class | view = Class->function | 5 = input method function view(5) ------ */

        defined("DefaultRouter")
            || define("DefaultRouter",1);




		
  
   
  set_include_path(implode(PATH_SEPARATOR, array(
		realpath(ROOT_PATH),
        realpath(Library_PATH),
		realpath(Controllers_PATH),
		get_include_path(),
   )));




  include_once("library".DS."autoload.php");
