<?php

namespace Cone\Billingo;

class Billingo
{
    /**
     * The API key.
     */
    protected string $apiKey;

    /**
     * The client instance.
     */
    // protected Client $client;

    // bankAccounts
    // currencies
    // documents
    // documentBlocks
    // documentExports
    // organizations
    // partners
    // products
    // spendings
    // utils

    /**
     * Create a new Billingo client.
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        // $this->client = new Client($apiKey);
    }
}
