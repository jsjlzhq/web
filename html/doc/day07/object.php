<?php

class NanShen
{
	public $weight = 150;
	public $face = '大嘴';
	public $money = '100000000000000';

	public function xi()
	{
		echo '能洗衣服';
	}
	public function eat()
	{
		echo '要能吃我吃剩下的东西';
	}	
}

$huangbo = new NanShen();
$huangbo->eat();
var_dump($huangbo);





