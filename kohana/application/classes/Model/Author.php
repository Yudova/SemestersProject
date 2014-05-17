<?php defined('SYSPATH') or die('No direct script access.');

class Model_Author extends ORM {

	/**
	 * Устанавливаем связь один ко многим
	 */
	protected $_has_many = array(
		'quote' => array(
			'model' => 'Quote',
			'foreign_key' => 'author_id',
		),
	);

} // End Model_Author
