<?php

namespace surajitbasak109\Ecomexpress\Clients;

class EcomExpressClient implements Client
{
	protected $url = "https://clbeta.ecomexpress.in";

	protected $endpoint;

	protected $headers;

	protected $responseType;

	public function __construct()
	{
	}

	/**
	 * set the endpoint
	 *
	 * @param string $endpoint
	 * @return object $this
	 */
	public function setEndpoint(string $endpoint): object
	{
		$this->endpoint = $this->url . $endpoint;
		return $this;
	}

	/**
	 * set the header
	 *
	 * @param string $token
	 * @return object
	 */
	public function setHeaders(string $token = null): object
	{
		$this->headers = ["Content-Type: application/json"];

        if ($token) {
            array_push($this->headers, "Authorization: Basic {$token}");
        }

		return $this;
	}

	/**
	 * Send the data using post request
	 *
	 * @param array $data
	 * @return mixed
	 */
	public function post(array $data, $type = "POST")
	{
		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => $this->endpoint,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $type,
			CURLOPT_POSTFIELDS => json_encode($data),
			CURLOPT_HTTPHEADER => $this->headers,
		]);

		$response = curl_exec($curl);
        /* var_dump($response); */

		if (!$this->isValid($response)) {
			$response = json_encode(['curl_error' => curl_error($curl)]);
		}

		curl_close($curl);

		return collect(json_decode($response, true));
	}

	/**
	 * Send the data using post request
	 *
	 * @param array $data
	 * @return mixed
	 */
	public function postWithoutBody($type = "POST")
	{
		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => $this->endpoint,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $type,
			// CURLOPT_POSTFIELDS => json_encode($data),
			CURLOPT_HTTPHEADER => $this->headers,
		]);

		$response = curl_exec($curl);
        /* var_dump($response); */

		if (!$this->isValid($response)) {
			$response = json_encode(['curl_error' => curl_error($curl)]);
		}

		curl_close($curl);

		return collect(json_decode($response, true));
	}

	/**
	 * Send a data using PATCH Request
	 *
	 * @param array $data
	 * @return mixed
	 */
	public function patch(array $data)
	{
		return $this->post($data, 'PATCH');
	}

	/**
	 * get the requested data using get request
	 *
	 * @return mixed
	 */
	public function get()
	{
		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => $this->endpoint,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => $this->headers,
		]);

		$response = curl_exec($curl);

		if (!$this->isValid($response)) {
			$response = json_encode(['curl_error' => curl_error($curl)]);
		}

		curl_close($curl);

		return collect(json_decode($response, true));
	}

	/**
	 * Check the return data is valid
	 *
	 * @param mixed $string
	 * @return bool
	 */
	private function isValid($string): bool
	{
		if (!$string) {
			return false;
		}

		return json_decode($string) ? true : false;
	}
}
