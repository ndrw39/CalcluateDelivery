<?php

namespace App\Managers;

use App\Services\Deliveries\DHLService;
use App\Services\Deliveries\RussianPostService;
use App\Contracts;

class DeliveryManager implements Contracts\Managers\DeliveryContract
{
    public const DELIVERIES = [
        'dhl',
        'russian_post'
    ];

    /**
     * @throws \Exception
     */
    public function make($name): Contracts\Services\DeliveryContract
    {
        return match ($name) {
            'dhl' => new DHLService(),
            'russian_post' => new RussianPostService(),
            default => throw new \Exception('Unsupported delivery'),
        };
    }
}
