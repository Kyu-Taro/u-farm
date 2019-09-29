<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Http\Requests\CreateRequest;
use Illuminate\Support\Facades\Storage;

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
    public function store(Request $request,CreateRequest $validate)
    {
        if (empty($request->file('img'))) {
            $form = $request->all();
            unset($form['_token']);
            $item = new Item;
            $item->fill($form)->save();
        }else{
            $form = $request->all();
            unset($form['_token']);
            $item = new Item;
            $path = Storage::disk('s3')->putFile('u-farm',$request->file('img'),'public');
            $img = Storage::disk('s3')->url($path);
            $form['img'] = $img;
            $item->fill($form)->save();
        }

        return redirect()->route('mypage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('mypage');
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
    public function update(Request $request, $id,CreateRequest $validate)
    {
        $item = Item::find($id);

        if(empty($request->file('img'))){
            $name = $request->input('name');
            $price = $request->input('price');
            $area = $request->input('area');
            $text = $request->input('text');

            $item->name = $name;
            $item->price = $price;
            $item->area = $area;
            $item->text = $text;
            $item->save();

            return redirect()->route('mypage');
         }else{
            $form = $request->all();
            $item->fill($form)->save();
            return redirect()->route('mypage');
        }
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
