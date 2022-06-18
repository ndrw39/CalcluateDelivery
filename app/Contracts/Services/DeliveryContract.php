<?php

namespace App\Contracts\Services;

interface DeliveryContract
{
    public function calculate(int $weight): float;
}
