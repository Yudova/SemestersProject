<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Application extends Controller {

	// Заголовок для всех страниц
	// protected $title = "Цитаты и афоризмы";

	// Массив всех категорий (упорядоченных по имени)
	protected $categories;

	public function before()
	{
		$this->categories = ORM::factory('Category')->order_by('title')->find_all()->as_array();
	}

} // End Controller_Application
