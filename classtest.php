<?php


class David
	{
		public $age = 15;
		public $name ="David";
		
		function __construct()
		{
			
			$this->age = $age;
			$this->name = $name;
			
		}



		public function getAge(){

			return $this->age .
			$this->name;
		}
	
		
	}	

	$david1 = new David ("David" , 15);
	print($david1->getAge());

	