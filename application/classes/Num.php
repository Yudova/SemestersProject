<?php defined('SYSPATH') or die('No direct script access.');

class Num extends Kohana_Num {

	/**
	 * Склонение зависимого слова от числа.
	 *
	 * [!!] Использование:
	 * 		echo "В архиве " . $count_record . " " . Num::plural($count_record, array('запись', 'записи', 'записей'));
	 *
	 * @param 	integer 	число
	 * @param 	array 		массив слов (и.п ед. ч., р.п ед.ч, р.п мн. ч.)
	 * @return 	string 		верную форму слова, согласованное с числительным
	 */
	public static function plural($number, array $plural = array())
	{
		return $plural[($number % 10 == 1 AND $number % 100 != 11) ? 0 : (($number % 10 >= 2 AND $number % 10 <= 4 AND ($number % 100 < 10 OR $number % 100 >= 20)) ? 1 : 2)];
	}

} // End Num
