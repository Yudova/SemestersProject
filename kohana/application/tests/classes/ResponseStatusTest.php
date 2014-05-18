<?php defined('SYSPATH') or die('No direct access allowed!');
 
class ResponseStatusTest extends Kohana_UnitTest_TestCase
{
	protected function makeRequest($uri)
	{
		$response = Request::factory($uri)
						->method('GET')
						->execute();

		return $response;
	}

	public function testURI()
	{
		$uris = array(
			'/',
			'best',
			'author',
			'quote/1540',
			'category/volition',
		);

		foreach ($uris as $key => $uri)
		{
			$response = $this->makeRequest($uri);

			$this->assertSame($response->status(), 200);
		}
	}
}
