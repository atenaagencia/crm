<?php

namespace App\Http\Controllers;

use App\Models\Niche;
use Illuminate\Http\Request;

class NicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niches = Niche::all();
        return view('pages.niche.indexNiches')->with('niches',$niches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.niche.createNiche');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query = Niche::create($request->all());
        return redirect()->route('niche.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Niche  $niche
     * @return \Illuminate\Http\Response
     */
    public function show(Niche $niche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Niche  $niche
     * @return \Illuminate\Http\Response
     */
    public function edit(Niche $niche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Niche  $niche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niche $niche)
    {
        $niche->update($request->all());
        return redirect()->route('niche.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Niche  $niche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niche $niche)
    {
        //
    }
}
