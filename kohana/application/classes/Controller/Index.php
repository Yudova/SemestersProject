<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Application {

	public function action_index()
	{
		// Модель цитат
		$quotes = ORM::factory('Quote');

		// Сортировка
		$sort_best = ($this->request->param('sort', NULL) === 'best');

		// Всего цитат на странице
		$items_per_page = Kohana::$config->load('pagination.quotes.items_per_page');

		// Всего цитат
		$total_items = (int) $quotes->count_all();

		// Переключатель страниц
		$pagination = Pagination::factory(array('config' => 'quotes', 'total_items' => $total_items, 'uri_page' => $sort_best ? 'best/page/' : 'page/'));

		// Проверяем
		if ($quotes AND $pagination->check())
		{
			// Лучшие или новые цитаты?
			if ($sort_best)
			{
				$title = "Лучшие самые кращі красивые красиво величайшие цитаты и афоризмы фразы статусы великих людей со смыслом";
				$description = "Лучшие цитаты и афоризмы великих людей со смыслом.";
				$keywords = "лучшие лучше самые кращі красивые красиво величайшие прикольные смешные цитаты и афоризмы фразы статусы великих великий людей со смыслом";
				$h1 = "Лучшие";
				$quotes_data = $quotes->order_by('rating', 'DESC')->limit($items_per_page)->offset($pagination->offset)->find_all()->as_array();
			}
			else
			{
				$title = "Новые красивые великие умные известные цитаты и афоризмы фразы статусы великих людей со смыслом";
				$description = "Новые цитаты и афоризмы великих людей со смыслом.";
				$keywords = "новые новейшие красивые великие умные известные прикольные смешные цитаты и афоризмы фразы статусы великих великий людей со смыслом";
				$h1 = "Новые";
				$quotes_data = $quotes->order_by('id', 'DESC')->limit($items_per_page)->offset($pagination->offset)->find_all()->as_array();
			}
			
			// Загруажем представление
			$this->response->body(View::factory('Index', array(
				'title' 		=> $title,
				'description' 	=> $description,
				'keywords' 		=> $keywords . " страница " . $pagination->current_page,
				'categories' 	=> $this->categories,
				'h1' 			=> $h1. " цитаты",
				'quotes' 		=> $quotes_data,
				'page' 			=> $pagination->render(),
			)));
		}
		else
		{
			throw new HTTP_Exception_404;
		}
	}

} // End Controller_Index
