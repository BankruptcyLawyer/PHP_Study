<?php
// task 1

	$names = [
		'Катя', 'Олег', 'Игорь', 'Юля', 'Максим'
	];

	for ($i = 1; $i <= 50; $i++){
		$age = random_int(18, 45);
		$random = random_int(0, 4);
		$users["user $i"] = ["id $i", "$names[$random]", $age];
	}

	$json = json_encode($users, JSON_UNESCAPED_UNICODE);
	file_put_contents('users.json', "$json");

	$backjson = file_get_contents('users.json');
	$decode = json_decode($backjson, true);
	$uniqueNames = [];
	$allAges = 0;
	foreach ($decode as $value){
		$allAges += $value[2];
		if (isset($uniqueNames[$value[1]])){
			$uniqueNames[$value[1]]++;
		} else {
			$uniqueNames[$value[1]] = 1;
		}
		$middleAge = $allAges / sizeof($decode);
	}
	echo "<pre>";
	print_r($decode);
	echo "</pre>";
	// $middleAge = $allAges / sizeof($decode);
	$namesnumb = count($uniqueNames);
	echo "Количество имён - $namesnumb" . "<br>";
	echo "Средний возраст - $middleAge лет";

echo "<br>";
// task 2

// task 3
interface I_CarSharing{
	public function tariff($km, $min);
	public function extraGps(I_ExtraServices $gps);
	public function extraDriver(I_ExtraServices $driver);
	public function countPrice($km, $min);
	
}

interface I_ExtraServices{
	public function gpsSrvc($hr);
	public function driver();
}

abstract class A_Methods implements I_CarSharing, I_Extraservices{
	public $name;
	public $finalcount;
	public $driverPrice;
	public $extraPrice;

	public function tariff($km, $min){
			echo "Тариф $this->name $km км, $min минут" . "<br>";
	}

	public function extraGps(I_ExtraServices $gps){}
		public function gpsSrvc($hr){
		$rate = 15;
		$period = $hr / 60;
		$round = ceil($period);
		$extraPrice = $round * $rate;
		echo '- Услуга GPS включена' . "<br>";
		$this->finalcount += $extraPrice;
		$this->extraPrice += $extraPrice;
		}

	public function extraDriver(I_ExtraServices $driver){}
		public function driver() {
		echo " - Услуга дополнительного водителя включена" . "<br>";
		$driverPrice = 100;
		$this->finalcount += $driverPrice;
		$this->driverPrice += $driverPrice;
		}

	public function countPrice($km, $min){
		if ($this->name == 'Базовый') {
			$kmPrice = 10;
			$minPrice = 3;
			$price = ($kmPrice * $km) + ($minPrice * $min);
			$this->finalcount += $price;
			echo "Общая стоимость поездки составила: $this->finalcount рублей, в том числе:<br>$this->driverPrice рублей - услуга доп. водителя,<br>$this->extraPrice - услуга GPS.";
		} elseif ($this->name == 'Студенческий'){ 
			$kmPrice = 4;
			$minPrice = 1;
			$price = ($kmPrice * $km) + ($minPrice * $min);
			$this->finalcount += $price;
			echo "Общая стоимость поездки составила: $this->finalcount рублей, в том числе:<br>$this->driverPrice рублей - услуга доп. водителя,<br>$this->extraPrice - услуга GPS.";
		} elseif ($this->name == 'Почасовой'){
			$rate = 200;
			$hour = $min / 60;
			$round = ceil($hour);
			$price = $round * $rate;
			$this->finalcount += $price;
			echo "Общая стоимость поездки составила: $this->finalcount рублей, в том числе:<br>$this->driverPrice рублей - услуга доп. водителя,<br>$this->extraPrice - услуга GPS.";
		}
	}
}

class Basic extends A_Methods implements I_CarSharing, I_ExtraServices{

	public $name = 'Базовый';
	public $finalcount = 0;
	public $driverPrice = 0;
	public $extraPrice = 0;
}

class PerHour extends A_Methods implements I_CarSharing, I_ExtraServices{
	
	public $name = 'Почасовой';
	public $finalcount = 0;
	public $driverPrice = 0;
	public $extraPrice = 0;
}

class Student extends A_Methods implements I_CarSharing, I_ExtraServices{
	
	public $name = 'Студенческий';
	public $finalcount = 0;
	public $driverPrice = 0;
	public $extraPrice = 0;
}

$Tariff = new Student;
$Tariff->tariff(6,90);
$Tariff->gpsSrvc(90);
$Tariff->driver();
$Tariff->countPrice(6,90);