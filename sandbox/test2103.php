<?php

class Animal {
	var $name;
	function set_name($text){
		$this -> name = $text;
	}
	function get_name(){
		return $this -> name;
	}
}
$lion = new Animal;
$lion -> set_name("Leo");
echo "The name of your new lion is ", $lion -> get_name() ,".";

 ?>
