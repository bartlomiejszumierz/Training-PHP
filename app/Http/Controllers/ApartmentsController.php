<?php

namespace App\Http\Controllers;

use App\Apartments;
use App\Cities;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments=Apartments::paginate(10);
        return view('apartments.index', compact('apartments') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=Cities::all();

        return view('apartments.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apartments = new Apartments();
        $apartments->apartments = $request->input('apartments');
        $apartments->save();

        return redirect('/apartments');
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
        $apartments=Apartments::find($id);
        $cities=Cities::all();
        return view('apartments.edit', compact('apartments','cities'));
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
        $apartments=Apartments::find($id);
        $apartments->price=$request->input('price');
        $apartments->room_numbers=$request->input('room_numbers');
        $apartments->metric_area=$request->input('metric_area');
        $apartments->description=$request->input('description');
        $apartments->cities_id=$request->input('cities_id');
        $apartments->save();
        return redirect('/apartments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartments=Apartments::find($id);
        $apartments->delete();
        return redirect('/apartments');
    }
}
