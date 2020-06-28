<?php namespace App\Controllers;

	use CodeIgniter\Test\ControllerTester;
	use PHPUnit\Framework\TestCase;

	class HomeTest extends TestCase
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
			$this->assertTrue($response->see('Welcome to CodeIgniter 4.0.3', 'h1'));
		}
	}
