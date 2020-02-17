<?php

namespace App\Provider;
use App\Intarface\ProviderInterface;
use App\Service\ProviderService;

class Provider1 implements ProviderInterface{

    public function exchange()
    {
        $provider = new ProviderService();
        $provider->setJsonUrl("http://www.mocky.io/v2/5a74519d2d0000430bfe0fa0");
        $provider->setAmount("amount");
        $provider->setSymbol("symbol");
        $provider->setDolar("USDTRY");
        $provider->setEuro("EURTRY");
        $provider->setSterlin("GBPTRY");
        return $provider;
    }
}
