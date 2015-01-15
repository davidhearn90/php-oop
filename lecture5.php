<?php
//example1
class Sport {

	public $name;
	public $country;
	public $gender;

	function __construct($name, $country, $gender){

		$this->name = $name;
		$this->country = $country;
		$this->gender = $gender;


	}


	function getSport(){

		return "I play "  .  $this->name .
		 "and i am from "  . $this->country;
	}
}

class Football extends Sport{

	function __construct($name, $country, $gender, $catch){

			parent::__construct($name, $country, $gender);
			$this->catch = $catch;
	}


function play(){

	return $this->catch;
}

}

class Baseball extends Sport{


	function __construct($name, $country, $gender, $hit){

			parent::__construct($name, $country, $gender);
			$this->hit = $hit;

	}

	function action(){

	return $this->hit;
}

}

$sport1 = new Football("Football", "America", "Male", "hello");
print $sport1->getSport();

//example2

class Game {

	public $name;
	public $country;
	public $type;

	function __construct($name, $country, $type){

		$this->name = $name;
		$this->country = $country;
		$this->gender = $type;


	}


	function getGame(){

		return " I play " . $this->name .
		 " and i am from " . $this->country;
	}
}

class Video extends Game{

	function __construct($name, $country, $type, $vid){

			parent::__construct($name, $country, $type);
			$this->vid = $vid;
	}


function play(){

	return $this->vid;
}

}

class Board extends Game{


	function __construct($name, $country, $type, $roll){

			parent::__construct($name, $country, $type);
			$this->roll = $roll;

	}

	function action(){

	return $this->roll;
}

}

$game1 = new Game("Monopoly", "America", "Board", "hello");
print  $game1->getGame();

//example3

class School {

	public $name;
	public $country;
	public $gender;

	function __construct($name, $country, $gender){

		$this->name = $name;
		$this->country = $country;
		$this->gender = $gender;


	}


	function getSchool(){

		return " I go to " .  $this->name .
		" and i am from " . $this->country;
	}
}

class Highschool extends Sport{

	function __construct($name, $country, $gender, $catch){

			parent::__construct($name, $country, $gender);
			$this->catch = $catch;
	}


function play(){

	return $this->catch;
}

}

class Middleschool extends Sport{


	function __construct($name, $country, $gender, $hit){

			parent::__construct($name, $country, $gender);
			$this->hit = $hit;

	}

	function action(){

	return $this->hit;
}

}

$school1 = new School("Pasadena", "America", "Neutral", "hello");
print  $school1->getSchool();