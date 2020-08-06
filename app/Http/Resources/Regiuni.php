<?php

namespace App\Http\Resources;

use App\Localitate;
use App\Helpers;
use Illuminate\Http\Resources\Json\JsonResource;

class Regiuni extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
