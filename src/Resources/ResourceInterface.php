<?php
namespace surajitbasak109\Ecomexpress\Resources;

interface ResourceInterface
{
    public function getRequest(string $endpoint);

    public function postRequest(string $endpoint, array $params);

    public function patchRequest(string $endpoint, array $params);

    public function postWithoutBodyRequest(string $endpoint);
}
