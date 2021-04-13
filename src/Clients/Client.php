<?php
namespace surajitbasak109\Ecomexpress\Clients;

interface Client
{
    public function setEndpoint(string $endpoint);

    public function setHeaders(string $token);

    public function get();
    
    public function post(array $data);

    public function patch(array $data);
}