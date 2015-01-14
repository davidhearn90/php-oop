<?php

class Pet {

	public $name = "Sam";
	public $owner ="David";
	public $gender = "boy";
	public $weight = 12;
	public $hamster = "hamster";
	public $snake = "snake";
	

	function __construct($name, $owner, $gender, $weight, $hamster, $snake){


			$this->name = $name;
			$this->owner = $owner;
			$this->gender = $gender;
			$this->weight = $weight;
			$this->hamster = $hamster;
			$this->snake = $snake;

	}

		function getName() {

			 return $this->hamster .
			$this->snake;

		}



}

class Hamster extends Pet{


	function crawl(){

		return $this->hamster;
	}
}

	class Snake extends Pet{


	function slither(){

		return $this->snake;
	}
}

$snake1 = new Snake("Sam", "Boy", 12, "David", "snake", "hamster");
print "I have a" . $snake1->getName();

//example 2

class sport {

	public $football = "Football";
	public $soccer= "Soccer";
	public $gender = "neutral";
	public $country = "country";
	
	

	function __construct($football, $gender, $country, $soccer){


			$this->football = $football;
			$this->gender = $gender;
			$this->country = $country;
			$this->soccer = $soccer;
	}

		function getSport() {

			 return $this->football .
			$this->soccer;

		}



}

class Football extends sport{


	function american(){

		return $this->football;
	}
}

	class Soccer extends sport{


	function european(){

		return $this->soccer;
	}
}

$football1 = new Football("Football", "Soccer", "country", "neutral");
print "I play" . $football1->getSport();

//example 3
class Music {

	public $classical ="classical";
	public $rock = "rock";
	public $rap = "rap";
	public $electro = "electro";
	

	function __construct($classical, $rock, $rap, $electro){


			$this->classical = $classical;
			$this->rock = $rock;
			$this->rap = $rap;
			$this->electro = $electro;
	}

		function getMusic() {

			 return $this->classical .
			$this->rock . $this->rap .
			$this->electro;

		}



}

class Classical extends Music{


	function classic(){

		return $this->classical;
	}
}

	class Rock extends Music{


	function rocks(){

		return $this->rock;
	}
}

$music1 = new Music("classical", "rock", "rap", "electro");
print "I listen to" . $music1->getMusic();
