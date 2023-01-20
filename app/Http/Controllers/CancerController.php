<?php

namespace App\Http\Controllers;

use App\Models\Cancer;
use Illuminate\Http\Request;

class CancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cancer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'slug' => 'required',
            'number_of_cases' => 'required',
            'number_of_deaths' => 'required'
        ]);

        return Cancer::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cancer::find($id);
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
        $data = Cancer::find($id);
        $data->update($request->all());
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Cancer::destroy($id);
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  str  $id
     * @return \Illuminate\Http\Response
     */
    public function search($type)
    {
        return Cancer::where('type', 'like', '%'.$type.'%')->get();
    }
}
