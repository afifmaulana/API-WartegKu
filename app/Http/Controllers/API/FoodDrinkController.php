<?php

namespace App\Http\Controllers\API;

use App\FoodDrink;
use App\Http\Controllers\Controller;
use App\Http\Resources\StoreResource;
use App\Store;
use Illuminate\Http\Request;

class FoodDrinkController extends Controller
{
    public function StoreCategory($category_id)
    {
        $foods = FoodDrink::where('category_id', $category_id)->get();
        $result =[];
        foreach ($foods as $food) {
            array_push($result,$food->store);
        }
        return response()->json([
            'message' => 'Berhasil Menampilkan Store',
            'status' => true,
            'data' => StoreResource::collection($result)
        ]);

    }
}
