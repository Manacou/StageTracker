<?php
/* 
 * AUTHOR : Kevin PAUSE
 * UPDATE : Febrary, 3rd 2012
 */
 
include_once('/../controller.php');
include_once('/../functions.php');
include_once('/../forms.php');
include_once('/../library/layout.php');

register_shutdown_function(array('Controller', 'Initialize'));

 class AccoutnController extends LayoutController
 {
	 protected $title = 'Stage Tracker - Comptes';

	 
	 /* Render the HTML Layout */
	 public function RenderBody()
	 {
		 include('/../templates/account.tpl');
	 }
	 
	 public function Run()
	 {
		 $this->get = $_GET;
		 $this->post = $_POST;
		
		 $this->RenderBody();
	 }

 }
 
?>