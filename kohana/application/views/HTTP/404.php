<?php defined('SYSPATH') OR die('No direct script access.');

echo View::factory('header', array(
	'title' 		=> 'Ничего не найдено',
	'description' 	=> '',
	'keywords' 		=> '',
));

echo View::factory('page/static', array(
	'content' => "<h1>Ничего не найдено</h1><h2>Запрашиваемая вами страница не найдена</h2><div style='margin:100px 100px 0 0;float:right;width:400px'>Проверьте ещё раз введенный адрес. Возможно, вы просто ошиблись адресом или вернитесь на <a href='/'>главную страницу</a>.</div><div style='font-size:200px'>404</div>",
));

echo View::factory('footer');
