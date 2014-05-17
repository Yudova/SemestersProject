<?php defined('SYSPATH') OR die('No direct script access.');

echo View::factory('Header', array(
	'title' 		=> $title,
	'description' 	=> $description,
	'keywords' 		=> $keywords,
));

$content  = "<h1>" . $h1 . "</h1>";
$content .= "<h3><span class='float-right'>Показать " . $h2 . "</span>Всего " . $count . " " . Num::plural($count, array("цитата", "цитаты", "цитат")) . "</h3>";
$content .= "<hr style='margin-bottom:0' />";
$content .= View::factory('Quote/Quotes', array('quotes' => $quotes));
$content .= "<hr class='clear' />";
$content .= $page;

echo View::factory('Page/Dynamic', array(
	'categories' 	=> $categories,
	'content' 		=> $content,
));

echo View::factory('Footer');
