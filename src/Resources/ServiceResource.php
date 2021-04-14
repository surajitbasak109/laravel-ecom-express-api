<?php
namespace surajitbasak109\Ecomexpress\Resources;

use surajitbasak109\Ecomexpress\Resources\Resource;

class ServiceResource extends Resource
{
    /**
     * Check the serviability for pincode
     *
     * @param array $credentials array containing username and password
     * @return mixed
     */
    public function checkServiceability(array $credentials)
    {
        $endpoint = '/apiv2/pincodes/';

        return $this->postWithoutBodyRequest($endpoint, $credentials);
    }
}
