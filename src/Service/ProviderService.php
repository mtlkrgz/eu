<?php
namespace App\Service;

class ProviderService{

    private $JsonUrl;
    private $symbol;
    private $amount;
    private $dolar;
    private $euro;
    private $sterlin;


    /**
     * @return mixed
     */
    public function getJsonUrl()
    {
        return $this->JsonUrl;
    }

    /**
     * @param mixed $JsonUrl
     */
    public function setJsonUrl($JsonUrl): void
    {
        $this->JsonUrl = $JsonUrl;
    }

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param mixed $symbol
     */
    public function setSymbol($symbol): void
    {
        $this->symbol = $symbol;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDolar()
    {
        return $this->dolar;
    }

    /**
     * @param mixed $dolar
     */
    public function setDolar($dolar): void
    {
        $this->dolar = $dolar;
    }

    /**
     * @return mixed
     */
    public function getEuro()
    {
        return $this->euro;
    }

    /**
     * @param mixed $euro
     */
    public function setEuro($euro): void
    {
        $this->euro = $euro;
    }

    /**
     * @return mixed
     */
    public function getSterlin()
    {
        return $this->sterlin;
    }

    /**
     * @param mixed $sterlin
     */
    public function setSterlin($sterlin): void
    {
        $this->sterlin = $sterlin;
    }





}