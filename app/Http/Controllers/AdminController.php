<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
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
    public function store(Request $request)
    {
        //
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
        $user = Auth::guard('admin')->user();

        if(empty($request->file('img'))){
            $name = $request->input('name');
            $email = $request->input('email');
            $postNumber = $request->input('postNumber');
            $area = $request->input('area');
            $tell = $request->input('tell');
            $text = $request->input('text');

            $user->name = $name;
            $user->email = $email;
            $user->postNumber = $postNumber;
            $user->area = $area;
            $user->tell = $tell;
            $user->text = $text;
            $user->save();
        }else{
            $name = $request->input('name');
            $email = $request->input('email');
            $postNumber = $request->input('postNumber');
            $area = $request->input('area');
            $tell = $request->input('tell');
            $text = $request->input('text');

            $path = Storage::disk('s3')->putFile('u-farm',$request->file('img'),'public');
            $img = Storage::disk('s3')->url($path);

            $user->name = $name;
            $user->email = $email;
            $user->postNumber = $postNumber;
            $user->area = $area;
            $user->tell = $tell;
            $user->text = $text;
            $user->img = $img;

            $user->save();
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
        //
    }
}
