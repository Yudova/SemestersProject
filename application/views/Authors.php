<?php defined('SYSPATH') OR die('No direct script access.');

echo View::factory('Header', array(
	'title' 		=> $title,
	'description' 	=> $description,
	'keywords' 		=> $keywords,
));

$content  = "<h1>" . $h1 . "</h1>";
$content .= "<hr style='margin-bottom:0' />";
$content .= "<div class='authors'>";

foreach ($authors as $author)
{
	$content .= "<h1><b>" . $author->count . "</b><a href='/author/" . (empty($author->uri) ? $author->id : $author->uri) . "'>" . (empty($author->full_name) ? $author->first_name : $author->full_name) . "</a></h1>";
}

$content .= "</div>";

echo View::factory('Page/Dynamic', array(
	'categories' 	=> $categories,
	'content' 		=> $content,
));

echo View::factory('Footer');
