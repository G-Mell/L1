<?php

namespace App\Http\Controllers;

use App\Models\Zhurnal;
use Illuminate\Http\Request;

class ZhurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zhurnals = Zhurnal::all()->toArray();
        return array_reverse($zhurnals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     *
     * Display the specified resource.
     * @param  \App\Models\Zhurnal  $zhurnal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Zhurnal::find($id);
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zhurnal  $zhurnal
     * @return \Illuminate\Http\Response
     */
    public function edit(Zhurnal $zhurnal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zhurnal  $zhurnal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zhurnal $zhurnal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zhurnal  $zhurnal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zhurnal $zhurnal)
    {
        //
    }
}
