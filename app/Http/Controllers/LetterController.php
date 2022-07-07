<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LetterTable;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var =  LetterTable::all();
        return $var;
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
        $var = date('Ymd').LetterTable::max('id')+1;

        $file = $request->file('img');
        $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $request->file('img')->move("letter", $name);

        $res = LetterTable::create([
            'name'=>$var,
            'img'=>'api.office.imrul.xyz/letter/'.$name,
            'sender_phone'=>$request->sender_name,
            'receiver_phone'=>$request->sender_name,
        ]);

        return $res->name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var =  LetterTable::where('name','>=', $id)->first();
        return $var;
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
