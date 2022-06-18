<?php

namespace App\Contracts\Managers;

interface DeliveryContract
{
    public function make(string $name): \App\Contracts\Services\DeliveryContract;
}
