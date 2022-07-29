<?php
include 'student.php';

$std_1 = new Student('Ahmad', '10th');
// 
// 
// 
$std_1->show_info();
// $std_1->set_class('10th');
$std_1->set_name('Ahmad Khan');
$std_1->show_info();



$std_2 = new Student();

$std_2->set_name('Fatemah');
// $std_2->set_class('10th');
$std_2->show_info();


echo '<h3>Counter: '. Student::$counter .'</h3>';

// 