<?php

namespace App\Http\Resources;

use App\Favorite;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $userIsLogged = Auth::guard('api-user')->user();

        if($userIsLogged){
            $fav = Favorite::where('user_id', $userIsLogged->id)->where('store_id', $this->id)->first();
            $favorite = $fav ? true : false;
        }else{
            $favorite = false;
        }

        return [
            "id" => $this->id,
            "name" => $this->name,
            "logo" => $this->logo,
            "address" => $this->address,
            "favorite" => $favorite
        ];
    }
}
