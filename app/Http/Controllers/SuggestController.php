<?php

namespace App\Http\Controllers;

use App\Models\Suggest;
use Illuminate\Http\Request;

class SuggestController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return view('auth.list.listSuggests', ['suggests' => Suggest::all()]);
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
        Suggest::create($request->all());

        return redirect()->route('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function show(Suggest $suggest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function edit(Suggest $suggest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suggest $suggest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suggest $suggest)
    {
        //
    }
}
