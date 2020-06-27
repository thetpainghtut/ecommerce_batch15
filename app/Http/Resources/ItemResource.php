<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        $photos = json_decode($this->photo);
        // dd($photos);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'photo' => url($photos[0]),
            'perprice' => $this->price,
        ];
    }
}
