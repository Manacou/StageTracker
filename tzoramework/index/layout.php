<?php
/* 
 * AUTHOR : Kevin PAUSE
 * UPDATE : Febrary, 3rd 2012
 */
 
 class LayoutController extends Controller
 {
	 protected $title = 'Stage Tracker';
	 protected $get;
	 protected $post;
	 protected $css_folder = 'theme/css/';
	 protected $images_folder = 'theme/images/';
	 protected $css = array(
	 	'style',
	 	);
	 
	 /* Render the HTML Layout */
	 public function RenderLayout()
	 {
		 include('/../../templates/layout.tpl');
	 }
	 
	 public function RenderHeader()
	 {
		 include('/../../templates/header.tpl');
	 }
	 
	 public function RenderBody()
	 {
		 $classes = get_declared_classes();
		 foreach($classes as $class)
		 {
			 if(get_parent_class($class) == 'LayoutController')
			 {
				 $body = new $class();
				 $body->Run();
			 }
		 }
	 }
	 
	 public function GetLoginForm()
	 {
		 $fields = array(
		 	new TextField(array(
				'hint' => 'Login',
				)),
			new PasswordField(array(
				'hint' => 'Mot de passe'
				)),
			new SubmitButton(array(
				'name' => 'validate',
				'value' => 'OK',
				)),
			);
				
		$form = new Form(array('action' => 'test.php'));
		return $form->GetFields($fields);
	 }
	 
	 public function Run()
	 {
		 $this->get = $_GET;
		 $this->post = $_POST;
		
		 $this->RenderLayout();
	 }
 }
 
?>