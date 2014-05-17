<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Представление списка цитат
 */
$html = "";

foreach ($quotes as $quote)
{
	$html .= "<div class='quote'>";
	$html .= "<div class='text'><p><a href='/quote/" . $quote->id . "'><i>«</i>" . $quote->quote . "<i>»</i></a></p></div>";
	$html .= "<div class='info'><span id='" . $quote->id . "' class='like-block'><span class='like'>" . $quote->rating . "</span></span><span class='author'>© <a href='/author/" . $quote->author->uri . "' title=''>" . $quote->author->first_name . "</a></span></div>";
	$html .= "</div><!--.quote-" . $quote->id . "-->";
}

echo $html;
