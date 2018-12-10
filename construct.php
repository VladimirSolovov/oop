<h2>Задача на __construct</h2>
<?php
	class Worker
	{
		private $name;
		private $salary;
		private $age;
		public function __construct($name, $salary, $age){
			$this->name = $name;
			$this->age = $age; 
			$this->salary = $salary;
		}
		public function getName(){
			return $this->name;
		}
		public function getSalary(){
			return $this->salary;
		}
		public function getAge(){
			return $this->age;
		}
	}
	$worker = new Worker('Дима', 1000, 25);
	echo $worker->getsalary() * $worker->getAge();
?>