<?php

namespace App\Http\Libraries;


use Illuminate\Support\Facades\Http;

class BaseApi
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('API_HOST');
    }

    private function client()
    {
        return Http::baseUrl($this->baseUrl);
    }

    public function index(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function create(String $endpoint, Array $data)
    {
        return $this->client()->post($endpoint, $data);
    }
    
    public function store(String $endpoint, Array $data)
    {
        return $this->client()->post($endpoint, $data);
    }

    public function update(String $endpoint, String $sampah, Array $data)
    {
        return $this->client()->get("$endpoint/$sampah", $data);
    }

    public function updateStore(String $endpoint, String $sampah, Array $data)
    {
        return $this->client()->put("$endpoint/$sampah", $data);
    }
}