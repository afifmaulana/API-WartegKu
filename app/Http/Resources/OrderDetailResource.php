<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "qty" => $this->qty,
            "price" => $this->price,
            "order" => new OrderResource($this->order),
            'food' => new FoodDrinkResource($this->food)
        ];
    }
}
