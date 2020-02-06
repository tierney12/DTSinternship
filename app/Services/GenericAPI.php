<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class GenericAPI
{
    protected $client;
    public $auth;
    public $headerAuthorization = false;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function get($uri, $options = [])
    {
        return $this->request('GET', $uri, $options);
    }

    public function post($uri, $options = [])
    {
        return $this->request('POST', $uri, $options);
    }

    public function request($method, $uri, $options = [])
    {
        try {
            if ($this->auth && is_array($this->auth)) {
                $options = array_merge($options, $this->auth);
            }

            if ($method == 'GET') {
                $key = 'query';
            } else {
                $key = 'form_params';
            }

            $array = [
                $key => $options,
            ];

            if ($this->headerAuthorization) {
                $array['headers'] = [
                    'Authorization' => 'Basic '.$this->auth
                ];
            }

            $res = $this->client->request($method, $uri, $array);

            return $res->getBody()->getContents();
        } catch (GuzzleException $e) {

        }
    }
}