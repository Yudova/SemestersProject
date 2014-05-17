<?php defined('SYSPATH') OR die('No direct script access.');

echo View::factory('Header', array(
	'title' 		=> $title,
	'description' 	=> $description,
	'keywords' 		=> $keywords,
));

$content  = "<h1>" . $h1 . "</h1>";
$content .= "<hr style='margin-bottom:0' />";
$content .= "<div class='quote big'>";
$content .= "<div style='font-size:25px' class='text'><p>«" . $quote->quote . "»</p></div>";
$content .= "<div class='info'><span id='" . $quote->id . "' class='like-block'><span class='like'>" . $quote->rating . "</span></span></span><span class='author'>© <a href='/author/" . $quote->author->uri . "' title='" . $quote->author->description . "'>" . ($quote->author->full_name ? $quote->author->full_name : $quote->author->first_name) . "</a></span></div>";
$content .= "</div><!--.quote-" . $quote->id . "-->";

echo View::factory('page/dynamic', array(
	'categories' => $categories, 
	'content' 	 => $content
));

echo View::factory('Footer');
