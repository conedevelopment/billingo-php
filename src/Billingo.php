<?php

namespace Cone\Billingo;

use Cone\Billingo\Api\BankAccountApi;
use Cone\Billingo\Api\CurrencyApi;
use Cone\Billingo\Api\DocumentApi;
use Cone\Billingo\Api\DocumentExportApi;
use Cone\Billingo\Api\OrganizationApi;
use Cone\Billingo\Api\PartnerApi;
use Cone\Billingo\Api\ProductApi;
use Cone\Billingo\Api\SpendingApi;
use Cone\Billingo\Api\UtilApi;

class Billingo
{
    /**
     * The API key.
     */
    protected string $apiKey;

    /**
     * The bank account service instance.
     */
    protected ?BankAccountApi $bankAccounts = null;

    /**
     * The currencies service instance.
     */
    protected ?CurrencyApi $currencies = null;

    /**
     * The document service instance.
     */
    protected ?DocumentApi $documents = null;

    /**
     * The document export service instance.
     */
    protected ?DocumentExportApi $documentExports = null;

    /**
     * The organization service instance.
     */
    protected ?OrganizationApi $organizations = null;

    /**
     * The partner service instance.
     */
    protected ?PartnerApi $partners = null;

    /**
     * The product service instance.
     */
    protected ?ProductApi $products = null;

    /**
     * The spending service instance.
     */
    protected ?SpendingApi $spendings = null;

    /**
     * The util service instance.
     */
    protected ?UtilApi $utils = null;

    /**
     * Create a new Billingo client.
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->config()->setApiKey('X-API-KEY', $apiKey);
    }

    /**
     * Get the configuration instance.
     */
    public function config(): Configuration
    {
        return Configuration::getDefaultConfiguration();
    }

    /**
     * Get the bank account service.
     */
    public function bankAccounts(): BankAccountApi
    {
        if (is_null($this->bankAccounts)) {
            $this->bankAccounts = new BankAccountApi(
                config: $this->config()
            );
        }

        return $this->bankAccounts;
    }

    /**
     * Get the currency service.
     */
    public function currencies(): CurrencyApi
    {
        if (is_null($this->currencies)) {
            $this->currencies = new CurrencyApi(
                config: $this->config()
            );
        }

        return $this->currencies;
    }

    /**
     * Get the document service.
     */
    public function documents(): DocumentApi
    {
        if (is_null($this->documents)) {
            $this->documents = new DocumentApi(
                config: $this->config()
            );
        }

        return $this->documents;
    }

    /**
     * Get the document export service.
     */
    public function documentExports(): DocumentExportApi
    {
        if (is_null($this->documentExports)) {
            $this->documentExports = new DocumentExportApi(
                config: $this->config()
            );
        }

        return $this->documentExports;
    }

    /**
     * Get the organization service.
     */
    public function organizations(): OrganizationApi
    {
        if (is_null($this->organizations)) {
            $this->organizations = new OrganizationApi(
                config: $this->config()
            );
        }

        return $this->organizations;
    }

    /**
     * Get the partner service.
     */
    public function partners(): PartnerApi
    {
        if (is_null($this->partners)) {
            $this->partners = new PartnerApi(
                config: $this->config()
            );
        }

        return $this->partners;
    }

    /**
     * Get the product service.
     */
    public function products(): ProductApi
    {
        if (is_null($this->products)) {
            $this->products = new ProductApi(
                config: $this->config()
            );
        }

        return $this->products;
    }

    /**
     * Get the spening service.
     */
    public function spendings(): SpendingApi
    {
        if (is_null($this->spendings)) {
            $this->spendings = new SpendingApi(
                config: $this->config()
            );
        }

        return $this->spendings;
    }

    /**
     * Get the util service.
     */
    public function utils(): UtilApi
    {
        if (is_null($this->utils)) {
            $this->utils = new UtilApi(
                config: $this->config()
            );
        }

        return $this->utils;
    }
}
