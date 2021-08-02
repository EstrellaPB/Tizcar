<?php

namespace App\Http\Controllers;
use App\Automobile;

use App\Http\Requests\AutomobileRequest;

class AutomobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automobiles = Automobile::All();
        return view('automobiles.index', compact('automobiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automobiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AutomobileRequest $request)
    {
        Automobile::create($request->all());
        return redirect()->route('automobiles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $automobile = Automobile::findOrFail($id);
        return view('automobiles.show', compact('automobile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $automobile = Automobile::findOrFail($id);
        return view('automobiles.edit', compact('automobile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AutomobileRequest $request, $id)
    {
        $automobile = Automobile::findOrFail($id);
        $automobile->update($request->all());
        return redirect()->route('automobiles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $automobile = Automobile::findOrFail($id)->delete();
        return redirect()->route('automobiles.index');
    }
}
