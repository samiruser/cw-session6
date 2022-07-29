<?php

class Student {


	protected $name;
	protected $class;

	public static $counter = 0;

	function __construct($name = null, $class = '7th'){
		$this->name = $name;
		$this->class = $class;

		static::$counter++;

		echo '<p>Student object created, current count:'. static::$counter .'</p>';
	}

	function __destruct(){
		static::$counter--;
		echo '<p>Student object delete, current count:'. static::$counter .'</p>';
	}

	public function set_name($name){
		$this->name = $name;
	}

	public function set_class($class){
		$this->class = $class;
	}

	public function show_info(){
		echo 	'<ul>
					<li>Name: '. $this->name .'</li>
					<li>Class: '. $this->class .'</li>
				</ul>';
	}

	
}