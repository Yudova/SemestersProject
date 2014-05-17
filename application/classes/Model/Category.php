<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM {

	/**
	 * Устанавливаем связь один ко многим
	 */
	protected $_has_many = array(
		'quote' => array(
			'model' => 'quote',
			'foreign_key' => 'category_id',
		),
	);

} // End Model_Category
