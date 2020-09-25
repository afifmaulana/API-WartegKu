<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StoreResource;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function searchByFood($query)
    {
        $stores = Store::with(['foods' => function($foods) use($query) {
            $foods->where('name', 'LIKE', "%{$query}%");
        }])->get();

        $results = [];
        foreach ($stores as $store) {
            if(count($store->foods) > 0){
                array_push($results, $store);
            }
        }
        
        return response()->json([
            'message' => 'Berhasil Menampilkan Data',
            'status' => true,
            'data' => $results
        ]);
    }
}
