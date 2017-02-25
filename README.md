## Magic Router

Router Management


PHP Architecture -> MVC



## Introduction

-With Magic You can easily manage all You Incoming Urls

-Your URL to easily manage by the MagicRouter

-Easily customize its core


## Installation

Download Project *.zip -> extract 

got to library\conf.php    Customize it


## Code Example
To manage routers -> Root folder  index.php

All Incoming Urls With Get
	// For Example : mysite.php/site

 	  Router::get("/site","Class@function");**

	
	//For Example : mysite.php/site
 	 Router::get("/site","Class@function");
 	 
	// Post :
	  Router::post("/Test","Class@function");
	
	// Request (get & Post) : 
	  Router::route("/article","Class@function");

	// for Get value from url must Write /$ (post,get,route) : 
	  Router::route("/article/$","class@function");

// Warning : When you are in the configuration file into the file / files by default the value is set to 1 DefaultRouter

	defined("DefaultRouter")
            || define("DefaultRouter",1);

	After you default URL is divided into 3 parts : 

	mysite.com/Class/function/value

All Load Methods
	// for Example : Load View file / View File name   ViewName.magic.php
	  **Load::viewer("ViewName");**


## Soon

-Group Routing

Don't Stop never just Done for Ever

## License

A short snippet describing the license (MIT, Apache, etc.)
