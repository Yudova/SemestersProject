<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Author extends Controller_Application {

	public function action_index ()
	{
		$uri = $this->request->param('uri', NULL);

		if ($uri === NULL)
		{
			$this->response->body(View::factory('authors', array(
				'title' 		=> "Авторы цитаты по авторам",
				'description' 	=> "Список всех авторов. Цитаты и афоризмы по авторам.",
				'keywords' 		=> "авторы цитаты и афоризмы фразы статусы по авторам",
				'categories' 	=> $this->categories,
				'h1' 			=> "Авторы",
				'authors' 		=> ORM::factory('author')->order_by('first_name', 'ASC')->find_all()->as_array(),
			)));
		}
		else
		{
			if (Valid::digit($uri))
			{
				$author = ORM::factory('author', array('id' => $uri));
			}
			else
			{
				$author = ORM::factory('author', array('uri' => $uri));
			}
			
			if ($author->loaded())
			{
				// Сортировка
				$sort_best = ($this->request->param('sort', NULL) === 'best');
				
				// Всего цитат на странице
				$items_per_page = Kohana::$config->load('pagination.quotes.items_per_page');
				
				// Всего цитат
				$total_items = (int) $author->count;

				// Переключатель страниц
				$pagination = Pagination::factory(array('config' => 'quotes', 'total_items' => $total_items, 'uri_page' => 'author/' . $uri  . ($sort_best ? '/best' : '') . '/page/'));
				
				// Лучшие или новые цитаты?
				if ($sort_best)
				{
					$title = "лучшие ";
					$description = "Лучшие цитаты";
					$keywords = "лучшие";
					$h2 = "<a href='/author/" . $uri . "'>новые цитаты</a>";
					$quotes_data = $author->quote->order_by('rating', 'DESC')->limit($items_per_page)->offset($pagination->offset)->find_all()->as_array();
				}
				else
				{
					$title = "";
					$description = "Цитаты";
					$keywords = "";
					$h2 = "<a href='/author/" . $uri . "/best'>лучшие цитаты</a>";
					$quotes_data = $author->quote->order_by('id', 'DESC')->limit($items_per_page)->offset($pagination->offset)->find_all()->as_array();
				}
				
				$this->response->body(View::factory('all', array(
					'title' 		=> ($author->full_name ? $author->full_name : $author->first_name) . " " . $title . "цитаты и афоризмы",
					'description' 	=> $author->first_name . ($author->full_name ? " — " . $author->full_name : "") . ". " . $description . " и афоризмы.",
					'keywords' 		=> UTF8::strtolower(str_replace(".", "", $author->first_name)) . ($author->full_name ? " " . UTF8::strtolower($author->full_name) : "") . " " . UTF8::strtolower($description) . " и афоризмы страница " . $pagination->current_page,
					'categories' 	=> $this->categories,
					'h1' 			=> ($author->full_name ? $author->full_name : $author->first_name),
					'h2' 			=> $h2,
					'count' 		=> $author->count,
					'quotes' 		=> $quotes_data,
					'page'		 	=> $pagination->render(),
				)));
			}
			else
			{
				throw new HTTP_Exception_404;
			}
		}
	}

} // End Controller_Author
