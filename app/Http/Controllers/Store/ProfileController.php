<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datas = Store::where('id', Auth::guard('store')->user()->id);
        return view('pages.profile.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Auth::guard('store')->user();
        $data->owner = $request->owner;
        $data->name = $request->name;
        $data->address = $request->address;
        if ($request->file('logo') == ''){
            $data->logo = $request->old_ogo;
        }else{
            $image_food=$request->file('logo');
            $filename=time().'.'.$image_food->getClientOriginalExtension();
            $path='stores/' . $filename;
            Storage::disk('s3')->put($path, file_get_contents($image_food));
            $data->logo = Storage::disk('s3')->url($path, $filename);
        }
        $data->save();

        return redirect()->route('profile.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
