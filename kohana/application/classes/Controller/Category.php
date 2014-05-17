<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Category extends Controller_Application {

	public function action_index ()
	{
		$categories = ORM::factory('Category');
	
		$uri = $this->request->param('uri', NULL);

		if ($uri === NULL)
		{
			$this->redirect('/');
		}
		else
		{
			// Ищем конкретную категорию
			$category = $categories->where('uri', '=', $uri)->find();

			if ($category->loaded())
			{
				// Сортировка
				$sort_best = ($this->request->param('sort', NULL) === 'best');

				// Всего цитат на странице
				$items_per_page = Kohana::$config->load('pagination.quotes.items_per_page');

				// Всего цитат
				$total_items = (int) $category->count;

				// Переключатель страниц
				$pagination = Pagination::factory(array('config' => 'quotes', 'total_items' => $total_items, 'uri_page' => 'category/' . $uri  . ($sort_best ? '/best' : '') . '/page/'));

				// Предлог
				$prepos = in_array(UTF8::substr($category->plural, 0, 1), array('а', 'и', 'о', 'у')) ? "об" : "о";

				// Множественное число
				$category->plural = $prepos . " " . $category->plural;

				// Лучшие или новые цитаты?
				if ($sort_best)
				{
					$title = ($category->keywords ? "Лучшие красивые " . UTF8::strtolower($category->keywords) : "Лучшие цитаты и афоризмы " . $category->plural);
					$keywords = "Лучшие цитаты " . $category->plural;
					$h1 = "Лучшие цитаты " . $category->plural;
					$h2 = "<a href='/category/" . $uri . "'>новые цитаты</a>";
					$quotes_data = $category->quote->order_by('rating', 'DESC')->limit($items_per_page)->offset($pagination->offset)->find_all()->as_array();
				}
				else
				{
					$title = ($category->keywords ? $category->keywords : "Цитаты и афоризмы " . $category->plural);
					$keywords = "цитаты " . $category->plural;
					$h1 = "Цитаты " . $category->plural;
					$h2 = "<a href='/category/" . $uri . "/best'>лучшие цитаты</a>";
					$quotes_data = $category->quote->order_by('id', 'DESC')->limit($items_per_page)->offset($pagination->offset)->find_all()->as_array();
				}

				$this->response->body(View::factory('All', array(
					'title' 		=> $title,
					'description' 	=> $category->description,
					'keywords' 		=> UTF8::strtolower($title) . " " . UTF8::strtolower($category->title) . " афоризмы фразы статусы страница " . $pagination->current_page,
					'categories' 	=> $this->categories,
					'h1' 			=> $h1,
					'h2' 			=> $h2,
					'count' 		=> $category->count,
					'quotes' 		=> $quotes_data,
					'page' 			=> $pagination->render(),
				)));
			}
			else
			{
				throw new HTTP_Exception_404;
			}
		}
	}

} // End Controller_Category
