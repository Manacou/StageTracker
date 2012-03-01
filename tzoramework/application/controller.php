<?php
/*
 * AUTHOR : Kevin PAUSE
 * DATE : Frebrary, 2nd 2012
 */
 
 class Controller
 { 
	 public function Initialize()
	 {
		 $classes = get_declared_classes();
		 foreach ($classes as $class)
		 {
			 if(get_parent_class($class) == 'Controller')
			 {
				 $controller = new $class();
				 $controller->Run();
			 }
		 }
	 }
 }
 ?>