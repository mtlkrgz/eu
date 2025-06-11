<?php

namespace App\Provider;
use App\Service\ProviderService;
use App\Intarface\ProviderInterface;


class Provider3 implements ProviderInterface{

    public function exchange()
    {
        $provider = new ProviderService();
        // use the correct case for the local JSON file
        $provider->setJsonUrl(__DIR__."/../../src/Provider3.json");
        $provider->setAmount("TLKarsiligi");
        $provider->setSymbol("kurAdi");
        $provider->setDolar("Usd");
        $provider->setEuro("Eur");
        $provider->setSterlin("Paund");
        return $provider;
    }
}
