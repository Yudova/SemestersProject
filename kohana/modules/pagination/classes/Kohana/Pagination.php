<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Переключатель страниц.
 *
 * @package    Kohana/Pagination
 * @author     Slimmi
 * @version    1.0
 * @copyright  (c) 2012 Slimmi
 * @license    http://slimmi.us
 */

abstract class Kohana_Pagination {

	// Конфигурация
	protected $config = array();

	// Текущая страница
	protected $current_page;

	// Всего страниц
	protected $total_pages;

	// Всего элементов
	protected $total_items;

	// Количество элементов на одной странице
	protected $items_per_page;

	// Номер первого элемента текущей страницы
	protected $current_first_item;

	// Номер паследнего элемента текущей страницы
	protected $current_last_item;

	// Номер предыдущей страницы
	// Или FALSE если это первая страница
	protected $previous_page;

	// Номер следующей страницы
	// Или FALSE если это последняя страница
	protected $next_page;

	// Первая страница
	// Или FALSE если это первая страница
	protected $first_page;

	// Последняя страница
	// Или FALSE если это последняя страница
	protected $last_page;

	// Offset
	protected $offset;

	// URI переключателя страниц
	protected $uri_page;

	/**
	 * Создаём новый объекта Pagination
	 *
	 * @param array Настройки
	 * @return object Pagination
	 */
	public static function factory(array $config = array())
	{
		return new Pagination($config);
	}

	/**
	 * Создаём новый объекта Pagination
	 *
	 * @param 	array 	Настройки
	 * @return 	object 	Pagination
	 */
	public function __construct(array $config = array())
	{
		// Получем конфигурацию
		$this->config = $this->_config($config);
		
		// Устанавливаем
		$this->setup();
	}

	/**
	 * Изменяем настройки модуля
	 *
	 * @param 	array 	Настройки
	 * @return 	void
	 */
	protected function _config(array $_configs = array())
	{
		// Получаем конфигурацию
		$config = Kohana::$config->load('pagination.' . ($_configs['config'] ? $_configs['config'] : 'default'));

		// Удаляем имя конфигурации
		unset($_configs['config']);

		// Обновляем
		foreach ($_configs as $key => $value)
		{
			$config[$key] = $value;
		}

		return $config;
	}

	/**
	 * Устанавливаем пагинацию
	 *
	 * @return object Текущий объект
	 */
	protected function setup()
	{
		// Пересчитываем
		if ( $this->current_page === NULL ) {
		
			// Откуда берем текущюю страницу
			if (isset($this->config['current_page']['query_string']))
			{
				// Из get запроса
				$this->current_page = isset($_GET[$this->config['current_page']['query_string']]) ? (int) $_GET[$this->config['current_page']['query_string']] : 1;
			}
			elseif (isset($this->config['current_page']['router']))
			{
				// Из роутера
				$this->current_page = (int) Request::$initial->param($this->config['current_page']['router'], 1);
			}

			// Высчитываем значения
			$this->total_items        = (int) max(0, $this->config['total_items']);
			$this->items_per_page     = (int) max(1, $this->config['items_per_page']);
			$this->offset        	  = (int) ($this->current_page - 1) * $this->items_per_page;
			$this->total_pages        = (int) ceil($this->total_items / $this->items_per_page);
			$this->current_first_item = (int) min((($this->current_page - 1) * $this->items_per_page) + 1, $this->total_items);
			$this->current_last_item  = (int) min($this->current_first_item + $this->items_per_page - 1, $this->total_items);
			$this->previous_page      = ($this->current_page > 1) ? $this->current_page - 1 : FALSE;
			$this->next_page          = ($this->current_page < $this->total_pages) ? $this->current_page + 1 : FALSE;
			$this->first_page         = ($this->current_page === 1) ? FALSE : 1;
			$this->last_page          = ($this->current_page >= $this->total_pages) ? FALSE : $this->total_pages;
			
			// URI
			$this->uri_page = $this->config['uri_page'];
		}
		
		return $this;
	}

	/**
	 * Проверяем в диапозоне ли запрошенная страница
	 *
	 * @return bool
	 */
	public function check()
	{

		if ($this->current_page >= 1 AND $this->current_page <= $this->total_pages)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	/**
	 * Выводим переключатель страниц
	 *
	 * @return  string  Html-код переключателя страниц
	 */
	public function render()
	{
		// Автоматически прячем переключатель страниц, когда нет неоходимости в нём
		if ( $this->config['auto_hide'] === TRUE AND $this->total_pages <= 1 ) {
			return '';
		}

		// Загружаем представление указанное в конфигурации
		return View::factory($this->config['view'], get_object_vars($this))->render();
	}

	/**
	 * Выводим переключатель страниц
	 *
	 * @return  string  Html-код переключателя страниц
	 */
	public function __toString()
	{
		return $this->render();
	}

	/**
	 * Возвращаем значения переключателя страниц
	 *
	 * @param  string  URI of the request
	 *
	 * @return  mixed  Свойство переключателя; NULL если не найдено свойство
	 */
	public function __get( $key )
	{

		return isset($this->$key) ? $this->$key : NULL;
	}

} // End Kohana_Pagination