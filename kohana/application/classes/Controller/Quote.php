<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Quote extends Controller_Application {

	public function action_index()
	{
		// Модель цитат
		$quote = ORM::factory('Quote', $this->request->param('id'));

		if ($quote->loaded())
		{
			$prepos = in_array(UTF8::substr($quote->category->plural, 0, 1), array('а', 'и', 'о', 'у')) ? "об" : "о";

			$quote->category->plural = $prepos . " " . $quote->category->plural;

			$title = "Цитата №" . $quote->id . " " . $quote->category->plural;

			$this->response->body(View::factory('Quote', array(
				'title' 		=> $title . ", " . UTF8::strtolower($quote->category->title) . " " . ($quote->author->full_name ? UTF8::strtolower($quote->author->full_name) : UTF8::strtolower($quote->author->first_name)) . " " . $quote->category->keywords,
				'description' 	=> $quote->category->title . ". Цитаты и афоризмы " . $quote->category->plural,
				'keywords' 		=> UTF8::strtolower($quote->category->title) . " цитата номер " . $quote->id . " цитаты и афоризмы " . $quote->category->plural . " " . $quote->category->keywords,
				'categories' 	=> $this->categories,
				'h1' 			=> $title,
				'quote' 		=> $quote,
			)));
		}
		else
		{
			throw new HTTP_Exception_404;
		}
	}


	public function action_rating()
	{
		$quote = ORM::factory('Quote', $this->request->param('id'));
		
		if ($quote->loaded())
		{
			$rating = $quote->ip->where('user_ip', '=', Request::$client_ip)->find()->as_array();

			$voted = ($rating['quote_id'] !== NULL AND $rating['user_ip'] !== NULL);

			if ( ! $voted)
			{
				ORM::factory('Rating')->set('quote_id', $quote->id)->set('user_ip', Request::$client_ip)->save();
				$quote->set('rating', $quote->rating + 1);
				$quote->save();
			}

			$response = array(
				'vote'  => !$voted,
				'count' => $quote->rating,
			);

			$this->response->body(json_encode($response, TRUE));
		}
		else
		{
			$this->request->redirect('/');
		}
	}

} // End Controller_Quote
