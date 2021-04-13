<?php

namespace surajitbasak109\Ecomexpress;

use surajitbasak109\Ecomexpress\Clients\EcomExpressClient;
use surajitbasak109\Ecomexpress\Resources\ServiceResource;

class EcomexpressAPi
{
	public $client;
	public function __construct(EcomExpressClient $client)
	{
		$this->client = $client;
	}

	public function service()
	{
		return new ServiceResource($this->client);
	}
}