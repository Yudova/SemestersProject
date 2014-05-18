<?php defined('SYSPATH') or die('No direct access allowed!');
 
class DatabaseSomeTest extends Kohana_UnitTest_TestCase
{
	public function testRating()
	{
		$response = Request::factory('/rating/1')
						->method('GET')
						->execute();

		$this->assertSame($response->status(), 200);

		json_decode($response->body());

		$this->assertTrue(json_last_error() === JSON_ERROR_NONE);
	}
}
