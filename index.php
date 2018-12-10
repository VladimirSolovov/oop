<h2>Задача 1</h2>
<?php
	class Worker
	{
		public $name;
		public $age;
		public $salary;	
	}
	$worker = new Worker();
	$worker->name = 'Иван';
	$worker->age = 25;
	$worker->salary = 1000;
	$worker2 = new Worker();
	$worker2->name = 'Вася';
	$worker2->age = 26;
	$worker2->salary = 2000;
?><h4>Сумма зарплат</h4><?
	echo $worker->salary + $worker2->salary;
?><h4>Сумма возрастов</h4><?
	echo $worker->age + $worker2->age;
?>
<br>
<a href="task2.php">задание 2</a>