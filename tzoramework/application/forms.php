<?php
/*
 * AUTHOR : Kevin PAUSE
 * DATE : Febrary, 3rd 2012
 */
 
 class Form
 { 
 	public function __construct($data = array())
	{
		foreach ($data as $key => $value)
		{
			$this->$key = $value;
		}
	}
	
	 public function GetFields($fields)
	 {
		 $this->render = '<form method="post" action="application/' .$this->action. '">';
		 foreach($fields as $field)
		 {
			 $this->render .= $field->Render();
		 }
		 
		 return $this->render. '</form>';
	 }
 }
		 
 class TextField extends Form
 {
	 public function __construct($data = array())
	{
		foreach ($data as $key => $value)
		{
			$this->$key = $value;
		}
	}
	
	 public function Render()
	 {
		 $render = '<input type="text" placeholder="'. $this->hint. '"/>';
		 
		 return $render;
	 }
 }
 
 class PasswordField extends Form
 {
	 public function __construct($data = array())
	{
		foreach ($data as $key => $value)
		{
			$this->$key = $value;
		}
	}
	
	 public function Render()
	 {
		 $render = '<input type="password" placeholder="'. $this->hint. '"/>';
		 
		 return $render;
	 }
 }
 
 class SubmitButton extends Form
 {
	 public function __construct($data = array())
	{
		foreach ($data as $key => $value)
		{
			$this->$key = $value;
		}
	}
	
	 public function Render()
	 {
		 $render = '<input type="submit" name="'. $this->name. '" value="' .$this->value. '"/>';
		 
		 return $render;
	 }
 }
?>