<h2>Задача 2 и 3</h2>
<?php
	class Worker
	{
		private $name;
		private $age;
		private $salary;
		private function checkAge($age){
			if($age = range(1, 100)){
				$checkAge = true;
			}else{
				$checkAge = false;
			}
			return $checkAge;
		}
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
		public function setSalary($salary){
			$this->salary = $salary;
		}
		public function getSalary(){
			return $this->salary;
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
	?><h4>Сумма зарплат</h4><?
	echo $worker->getSalary() + $worker2->getSalary();
?><h4>Сумма возрастов</h4><?
	echo $worker->getAge() + $worker2->getAge();
?>
<br>
<a href="construct.php">задание construct</a>