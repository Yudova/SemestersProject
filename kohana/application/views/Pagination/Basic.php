<?php

/**
 * Шаблон переключателя страниц
 */

// Количество страниц справа
$count_page_left = 4;

// Количество страниц слева
$count_page_right = 4;

$html = "<span>" . $current_page . "</span>";

for ($i = 1; $i <= $count_page_right AND ($current_page + $i) <= $total_pages; $i++)
{
	// Страницы справа
	$html .= "<a href='/" . $uri_page . ($current_page + $i) . "'>" . ($current_page + $i) . "</a>";
}

for ($i = 1; $i <= $count_page_left AND ($current_page - $i) >= 1; $i++)
{
	// Страницы слева
	$html = "<a href='/" . $uri_page . ($current_page - $i) . "'>" . ($current_page - $i) . "</a>" . $html;
}

if ($next_page)
{
	// Добавляем стрелочку вперед
	$html .= "<a class='next' href='/" . $uri_page . $next_page . "'><span></span></a>";
}

if ($previous_page)
{
	// Добавляем стрелочку назад
	$html = "<a class='back' href='/" . $uri_page . $previous_page . "'><span></span></a>" . $html;
}

$html = "<section class='switch-pages'>" . $html . "</section><!--.switch-pages-->";

echo $html;