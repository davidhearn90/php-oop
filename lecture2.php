<?php
//lecture2

//example 1
class Me{

	public $firstname ="David";
	public $lastname ="Hearn";
	public $age = '15'; 


			function construct($title, $firstname, $lastname, $breed){

				$this->firstname = $firstname;
				$this->lastname = $lastname;
				$this->age = $age;

			}

		function getName(){

			return "{$this->firstname}" .
			"{$this->lastname}";
		}

}

$me1 = new Me("David", "Hearn", "15");
print "Who:{$me1->getName()}";
	
	
	//example 2
	class Cat{

	public $firstname ="Mr.";
	public $lastname ="whiskers";
	public $age = '15'; 


			function construct($title, $firstname, $lastname, $age){

				$this->firstname = $firstname;
				$this->lastname = $lastname;
				$this->age = $age;

			}

		function getName(){

			return "{$this->firstname}" .
			"{$this->lastname}";
		}

}

$cat1 = new Me("David", "Hearn", "Lion");
print "Cat1:{$cat1->getName()}";
	

	//example 3

	class fruit{

	public $type ="Apple";
	public $color ="Red and Yellow";
	public $age = '3'; 


			function construct($title, $type, $color, $age){

				$this->type = $type;
				$this->color = $color;
				$this->age = $age;

			}

		function getType(){

			return "{$this->type}" .
			"{$this->color}";
		}

}

$fruit1 = new Fruit("Apple", "Red and Yellow", "3");
print "What:{$fruit1->getType()}";
	