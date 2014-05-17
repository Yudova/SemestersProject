<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'default' => array(
		// Откуда берём текущюю страницу query_string или route
		'current_page'   => array('query_string' => 'page'),
		'total_items'    => 0,
		'items_per_page' => 10,
		'view'           => 'pagination/basic',
		'auto_hide'      => TRUE,
	),
);
