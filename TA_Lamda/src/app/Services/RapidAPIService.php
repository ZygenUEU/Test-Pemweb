<?php

namespace App\Services;

use GuzzleHttp\Client;

class RapidAPIService
{
    protected $apiKey;
    protected $baseUrl;
    protected $client;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = 'https://free-to-play-games-database.p.rapidapi.com/api/games'; // Ganti dengan base URL API RapidAPI yang sesuai

        // Inisialisasi client Guzzle
        $this->client = new Client([
            'headers' => [
                'X-RapidAPI-Key' => $this->apiKey,
            ],
        ]);
    }

    public function getData()
    {
        $response = $this->client->get($this->baseUrl . '/endpoint'); // Ganti dengan endpoint yang sesuai

        return json_decode($response->getBody(), true);
    }
}
