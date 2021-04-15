<?php
namespace surajitbasak109\EcomExp\Resources;

use surajitbasak109\EcomExp\Resources\Resource;

class ServiceResource extends Resource
{
    /**
     * Check the serviability for pincode
     *
     * @param array $credentials array containing username and password
     * @return mixed
     */
    public function checkServiceability()
    {
        $endpoint = '/apiv2/pincodes/';

        return $this->postWithoutBodyRequest($endpoint);
    }
}
