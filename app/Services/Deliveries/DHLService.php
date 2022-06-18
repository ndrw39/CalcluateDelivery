<?php

namespace App\Services\Deliveries;

use App\Contracts\Services\DeliveryContract;

class DHLService implements DeliveryContract
{
    private const PRICE = 100;

    public function calculate(int $weight): float
    {
        // DHL за каждый 1 кг берет 100 руб
        $sum = ceil($weight / 1000);

        return self::PRICE * $sum;
    }
}
