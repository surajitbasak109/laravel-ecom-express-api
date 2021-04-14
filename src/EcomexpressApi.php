<?php

namespace surajitbasak109\Ecomexpress;

use surajitbasak109\Ecomexpress\Clients\EcomExpressClient;
use surajitbasak109\Ecomexpress\Resources\ServiceResource;
use surajitbasak109\Ecomexpress\Exceptions\EcomExpressException;

class EcomexpressApi
{
	public $client;
	public function __construct(EcomExpressClient $client)
	{
		$this->client = $client;
	}

    public function getToken($credentials = null) {
        if (!$credentials) {
            $credentials = config('ecomexpress.credentials');
        }

        if (
            !is_array($credentials) ||
            empty($credentials['username']) ||
            empty($credentials['password'])
        ) {
            throw new EcomExpressException("Invalid credentials", 401);
        }

        $token = base64_encode(sprintf("%s:%s", $credentials['username'], $credentials['password']));
        return $token;
    }

	public function service(string $token)
	{
		return new ServiceResource($this->client, $token);
	}
}
