<?php

namespace surajitbasak109\EcomExp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \surajitbasak109\EcomExp\EcomExpApi
 */

class EcomExp extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'ecomexp';
	}
}
