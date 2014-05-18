<?php defined('SYSPATH') or die('No direct access allowed!');
 
class NotFoundTest extends Kohana_UnitTest_TestCase
{
	public function testNotFound()
	{
		$response = Request::factory('/not/found/page')
						->method('GET')
						->execute();

		$this->assertSame($response->status(), 404);
	}
}
