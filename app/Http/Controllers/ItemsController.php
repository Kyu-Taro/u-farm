<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Http\Requests\CreateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Services\Judgment;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request,CreateRequest $validate,Judgment $jud)
    {
        if (empty($request->file('img'))) {
            $jud->itemStore($request);
        }else{
            $jud->itemStoreStorage($request);
        }

        return redirect()->route('mypage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($i)
    {
        $item = Item::find($i);
        if(Auth::guard('admin')->check()){
            $user = Auth::guard('admin')->user();
        }else{
            $user = Auth::user();
        }

        $data = [
            'user' => $user,
            'item' => $item,
        ];

        return view('pages.itemDetail',$data);
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
    public function update(Request $request, $id,CreateRequest $validate,Judgment $jud)
    {
        $item = Item::find($id);

        if(empty($request->file('img'))){
            $jud->itemUpdate($request,$item);
         }else{
             $jud->itemUpdateStorage($request,$item);
        }
        return redirect()->route('mypage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
        return redirect()->route('mypage');
    }
}
