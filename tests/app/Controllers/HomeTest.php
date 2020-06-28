<?php namespace App\Controllers;

	use CodeIgniter\Test\CIDatabaseTestCase;
	use CodeIgniter\Test\ControllerTester;

	class HomeTest extends CIDatabaseTestCase
	{
		use ControllerTester;

		public function testHomepage_returnsOkStatus(): void {
			$response = $this->withUri('http://whiskeybox.local/')
							 ->controller(Home::class)
							 ->execute('index');
			$this->assertTrue($response->isOK());
		}

		public function testHomepageTitle_returnsGivenText(): void {
			$response = $this->withUri('http://whiskeybox.local/')
							 ->controller(Home::class)
							 ->execute('index');
			$this->assertTrue($response->see('HoneyDo List', 'h1'));
		}
	}
