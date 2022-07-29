<?php

// function sum($n1, $n2){
// 	return $n + $n2;
// }


// function sub($n1, $n2){
// 	return $n1 - $n2;
// }

// function login($user_data){
// 	// $user_data is an associative array
// 	$_SESSION['user_name'] = $user_data['user_name'];
// 	$_SESSION['logged_in'] = true;
// }

// function is_logged_in(){
// 	return isset($_SESSION['logged_in']);
// }

// access modifiers: public, private, protected

class AnotherClass {

}

class Calculator extends AnotherClass{

	protected $model = '2010';

	public function sum($n1, $n2){
		return $n1 + $n2;
	}


	private function sub($n1, $n2){
		// 
		// 
		return $n1 - $n2;
	}


	public function another_custom_func(){
		$x = $this->sub(10, 4);
	}


	protected function subtract($a, $b){
		return $this->sub($a, $b);
	}


	public function subtraction($x, $y){
		return $this->sub($x, $y);
	}

	public function show_message(){
		echo '<h2>Hello, I am a basic calculator!</h2>';
	}

	public function show_model(){
		echo "The model is ". $this->model;
	}

	public static function printer(){
		echo 'This is the printer function';
	}
}


class ScientificCalculator extends Calculator {

	protected $model = '2022';

	public function demo(){
		// 
		// 
		$result = $this->sum(10, 40);
		echo '<h1>Result inside the class: '. $result .'</h1>';
		// 
		// 

		$another_result = $this->subtract(30, 20);
		echo '<h1>Another Result inside the class: '. $another_result .'</h1>';
	}

	// overriding

	public function show_message(){
		echo '<h2>Hello from Scientific calculator!</h2>';
	}


}
