<?php

class You{

	public $firstname = "bob";
	public $lastname = "jackson";
	public $age = "15";

	function name(){
		return"{$this->firstname}" .
		"{$this->lastname}";

	}

	$me = new You();
	$me->firstname = "David";
	$me->lastname = "Hearn";

	print "my name is {$me->name()}";

class Duck{

	public $firstname = "bob";
	public $lastname = "jackson";
	public $age = "15";

	function name(){
		return"{$this->firstname}" .
		"{$this->lastname}";

	}

	$farm = new Duck();
	$farm->firstname = "Donald";
	$farm->lastname = "Duck";

	print "my name is {$farm->name()}";

class chicken{

	public $firstname = "bob";
	public $lastname = "jackson";
	public $age = "15";

	function name(){
		return"{$this->firstname}" .
		"{$this->age}";

	}

	$farm = new chicken();
	$farm->firstname = "chick";
	$farm->age = "3";

	print "my name is {$farm->name()}";

	
	
