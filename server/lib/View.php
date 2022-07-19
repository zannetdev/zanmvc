<?php

class View {
	function __construct() {
		//echo 'this is the view';
	}
	public function render($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'app/views/' . $name . '.php';	
		}
		else {
			require 'app/views/template/header.php';
			require 'app/views/' . $name . '.php';
			require 'app/views/template/footer.php';	
		}
	}

}