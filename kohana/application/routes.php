<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Set the routes. Each route must have a minimum of a name,
 * a URI and a set of defaults for the URI.
 */
// if( ! Route::cache())
// {
	// 404 ошибка
	Route::set('error_404', '404')
		->defaults(array(
			'controller' => '404',
			'action'     => 'index',
		));

	// Новые / лучшие цитаты
	Route::set('main', '(<sort>)((/)page/<page>)', array('sort' => 'best', 'num' => '\d+'))
		->defaults(array(
			'controller' => 'index',
			'action'     => 'index',
		));

	// Одна цитата
	Route::set('quote', 'quote/<id>', array('id' => '\d+'))
		->defaults(array(
			'controller' => 'quote',
			'action'     => 'index',
		));

	// Категории
	Route::set('category', 'category(/<uri>(/<sort>)(/page/<page>))', array('uri' => '[a-z0-9_-]+', 'sort' => 'best', 'page' => '\d+'))
		->defaults(array(
			'controller' => 'category',
			'action'     => 'index',
		));

	// Авторы
	Route::set('author', 'author(/<uri>(/<sort>)(/page/<page>))', array('uri' => '[a-z0-9_-]+', 'sort' => 'best', 'page' => '\d+'))
		->defaults(array(
			'controller' => 'author',
			'action'     => 'index',
		));

	// Рейтинг
	Route::set('rating', 'rating/<id>', array('id' => '\d+'))
		->defaults(array(
			'controller' => 'quote',
			'action'     => 'rating',
		));

	// Route::cache(TRUE);
// }