<?php

namespace surajitbasak109\EcomExp\Tests\Traits;

use surajitbasak109\EcomExp\EcomExp;

/**
 * Authenticate Trait
 */
trait Authenticate
{
	public function getToken() {
		return EcomExp::getToken();
	}
}
