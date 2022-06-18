<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Managers\DeliveryContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveryCalculateRequest;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\JsonResponse;

class DeliveryController extends Controller
{
    /**
     * @throws BindingResolutionException
     */
    public function calculate(DeliveryCalculateRequest $request, string $name): JsonResponse
    {
        $delivery = app(DeliveryContract::class)->make($name);

        $result = [
            'from' => $request->from,
            'to' => $request->to,
            'weight' => $request->weight,
            'sum' => $delivery->calculate($request->weight)
        ];

        return response()->json($result);
    }
}
