<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Localitati extends JsonResource
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
            'id'=>$this->id,
            'denumire'=>$this->denumire,
            'judet'=> $this->afisareJudet->id
        ];
    }
}
