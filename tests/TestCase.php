<?php

namespace surajitbasak109\EcomExp\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use surajitbasak109\ecomexp\EcomExpServiceProvider;

class TestCase extends Orchestra
{
	public function setUp(): void
	{
		parent::setUp();
	}

	protected function getPackageProviders($app)
	{
		return [
			EcomExpServiceProvider::class
		];
	}
}
