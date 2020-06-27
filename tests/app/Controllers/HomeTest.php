<?php namespace App\Controllers;

	use CodeIgniter\Test\CIUnitTestCase;
	use PHPUnit\Framework\TestCase;

	class HomeTest extends TestCase
	{
		public function testTrueIsNotFalse() {
			$this->assertNotEquals(true, false);
		}

		public function testTrueIsTrue() {
			$this->assertEquals(true, true);
		}
	}
