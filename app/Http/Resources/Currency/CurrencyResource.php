<?php

namespace App\Http\Resources\Currency;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this['ID'],
            'name' => $this['Name'],
            'charCode' => $this['CharCode'],
            'nominal' => $this['Nominal'],
            'value' => $this['Value'],
        ];
    }
}
