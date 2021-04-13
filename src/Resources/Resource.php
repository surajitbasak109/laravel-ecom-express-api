<?php
namespace surajitbasak109\Ecomexpress\Resources;

use surajitbasak109\Ecomexpress\Clients\Client;
use surajitbasak109\Ecomexpress\Resources\ResourceInterface;

abstract class Resource implements ResourceInterface
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getRequest(string $endpoint)
    {
        return  $this->client->setEndpoint($endpoint)
                    ->setHeaders($this->token)
                    ->get();
    }

    public function postRequest(string $endpoint, array $params)
    {
        return $this->client->setEndpoint($endpoint)
                    ->setHeaders($this->token)
                    ->post($params);
    }

    public function patchRequest(string $endpoint, array $params)
    {
        return $this->client->setEndpoint($endpoint)
                    ->setHeaders($this->token)
                    ->patch($params);
    }
}
