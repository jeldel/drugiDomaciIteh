<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public static $wrap = 'order';

    public function toArray(Request $request)
    {
        return[
            'id' => $this->resource->id,
            'user' => new UserResource($this->resource->user),
            'menu' => new MenuResource($this->resource->menu),
            'quantity' => $this->resource->quantity
        ];
    }
}
