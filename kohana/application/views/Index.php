<?php defined('SYSPATH') OR die('No direct script access.');

echo View::factory('Header', array(
	'title' 		=> $title,
	'description' 	=> $description,
	'keywords' 		=> $keywords,
));

$content  = "<h1>" . $h1 . "</h1>";
$content .= "<hr style='margin-bottom:0' />";
$content .= View::factory('Quote/Quotes', array('quotes' => $quotes));
$content .= "<hr class='clear' />";
$content .= $page;

echo View::factory('Page/Dynamic', array(
	'categories' 	=> $categories,
	'content' 		=> $content,
));

echo View::factory('Footer');
