<?php defined('SYSPATH') or die('No direct script access.');

class Model_Quote extends ORM {

	/**
	 * Устанавливаем связь один ко многим
	 */
	protected $_has_many = array(
		'ip' => array(
			'model' => 'Rating',
			'foreign_key' => 'quote_id',
		),
	);
	
	/**
	 * Устанавливаем связь много к одному
	 */
	protected $_belongs_to = array(
		'author' => array(
			'model' => 'Author',
			'foreign_key' => 'author_id',
		),
		'category' => array(
			'model' => 'Category',
			'foreign_key' => 'category_id',
		),
	);

} // End Model_Quote
