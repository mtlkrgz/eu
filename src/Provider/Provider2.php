<?php

namespace App\Provider;
use App\Service\ProviderService;
use App\Intarface\ProviderInterface;


class Provider2 implements ProviderInterface{

    public function exchange()
    {
        $provider = new ProviderService();
        $provider->setJsonUrl("http://www.mocky.io/v2/5a74524e2d0000430bfe0fa3");
        $provider->setAmount("oran");
        $provider->setSymbol("kod");
        $provider->setDolar("DOLAR");
        $provider->setEuro("AVRO");
        $provider->setSterlin("İNGİLİZ STERLİNİ");
        return $provider;
    }
}
