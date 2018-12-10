<h2>Наследование</h2>
<?php
	class User
	{
		protected $name;
		protected $age;
		public function setName($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name;
		}
		public function setAge($age){
			$this->age = $age;
		}
		public function getAge(){
			return $this->age;
		}
	}
	class Worker extends User
	{
		private $salary; 
		public function getSalary(){ 
			return $this->salary; 
		} 
		public function setSalary($salary){ 
			$this->salary = $salary; 
		} 
	}
	$worker = new Worker();
	$worker->setName('Иван');
	$worker->setAge(25);
	$worker->setSalary(1000);
	$worker2 = new Worker();
	$worker2->setName('Вася');
	$worker2->setAge(26);
	$worker2->setSalary(2000);
	class Student extends User
	{
		private $stipend;
		private $course;
		public function getStipend(){
			return $this->stipend;
		}
		public function setStipend($stipend){
			$this->stipend = $stipend;
		}
		public function getCourse(){
			return $this->$course;
		}
		public function setCourse($course){
			$this->course = $course;
		}
	}
	class Driver extends Worker
	{
		private $stage;
		private $categoryA;
		private $categoryB;
		private $categoryC;
	}
?>