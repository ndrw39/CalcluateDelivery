<?php

namespace App\Services\Deliveries;

use App\Contracts\Services\DeliveryContract;

class RussianPostService implements DeliveryContract
{
    private const PRICE = 100;
    private const WEIGHT_MORE = 10000;
    private const PRICE_MORE = 1000;

    public function calculate(int $weight): float
    {
        // Почта России до 10 кг берет 100 руб, все что cвыше 10 кг берет 1000 руб
        if ($weight < self::WEIGHT_MORE) {
            return self::PRICE;
        }

        return self::PRICE_MORE;
    }
}
