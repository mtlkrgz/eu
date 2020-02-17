<?php

namespace App\Service;

use App\Intarface\ProviderInterface;

class CurrService{


    public function provider(ProviderInterface $ProviderInterface)
    {
        return $ProviderInterface->exchange();
    }


}