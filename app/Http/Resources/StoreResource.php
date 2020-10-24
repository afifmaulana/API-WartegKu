<?php

namespace App\Http\Resources;

use App\Favorite;
use Carbon\Carbon;
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

        $timeNow = Carbon::now();

        $openingHours = Carbon::parse($this->clock->opening_hours)->format('H:i');
        $closingHours = Carbon::parse($this->clock->closing_hours)->format('H:i');
        $open = Carbon::createFromDate($this->clock->opening_hours);
        $close = Carbon::createFromDate($this->clock->closing_hours);
        if (!$timeNow->between($open, $close, true)) {
            $isOpened = true;
        }else{
            $isOpened = false;
        }

        return [
            "id"            => $this->id,
            "owner"         => $this->owner,
            "name"          => $this->name,
            "logo"          => $this->logo,
            "address"       => $this->address,
            "favorite"      => $favorite,
            "opening_hours" => $openingHours,
            "closing_hours" => $closingHours,
            "is_opened"     => $isOpened
        ];
    }
}
