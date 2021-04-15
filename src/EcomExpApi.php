<?php

namespace surajitbasak109\EcomExp;

use surajitbasak109\EcomExp\Clients\EcomExpClient;
use surajitbasak109\EcomExp\Resources\ServiceResource;
use surajitbasak109\EcomExp\Exceptions\EcomExpException;

class EcomExpApi
{
	public $client;
	public function __construct(EcomExpClient $client)
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
            throw new EcomExpException("Invalid credentials", 401);
        }

        $token = base64_encode(sprintf("%s:%s", $credentials['username'], $credentials['password']));
        return $token;
    }

	public function service(string $token)
	{
		return new ServiceResource($this->client, $token);
	}
}
