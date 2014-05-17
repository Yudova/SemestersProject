<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'default' => array(
		// Откуда берём текущюю страницу query_string или router
		'current_page'   => array('query_string' => 'page'),
		'total_items'    => 0,
		'items_per_page' => 10,
		'view'           => 'pagination/basic',
		'auto_hide'      => TRUE,
	),
	'quotes' => array(
		// Откуда берём текущюю страницу query_string или router
		'current_page'   => array('router' => 'page'),
		'total_items'    => 0,
		'items_per_page' => 15,
		'view'           => 'pagination/basic',
		'auto_hide'      => TRUE,
	),
);
