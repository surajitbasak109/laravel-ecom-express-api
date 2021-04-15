<?php

namespace surajitbasak109\EcomExp\Tests\Feature;

use surajitbasak109\EcomExp\EcomExp;
use surajitbasak109\EcomExp\Tests\TestCase;
use surajitbasak109\EcomExp\Tests\Traits\Authenticate;

class ServiceTest extends TestCase
{
	use Authenticate;

	protected $token;

	public function setUp(): void
	{
		parent::setUp();
		$this->token = $this->getToken();
	}

	public function can_able_check_a_servicable_pincodes()
	{
		$response = EcomExp::service()->postWithoutBodyRequest();
		$this->assertEquals(200, $response->get('status'));
	}
}