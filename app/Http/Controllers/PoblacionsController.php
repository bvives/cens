<?php

namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Poblacion;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoblacionsController extends Controller {

    protected $rules = [
        'name' => ['required', 'min:3'],
        'habitants' => ['required', 'numeric', 'min:0'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $poblacions = Poblacion::all();
        return view('poblacions.index', compact('poblacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('poblacions.create');
    }

    /**
     * 
     * @param Request $request
     * @return type
     */
    public function store(Request $request) {
        $this->validate($request, $this->rules);
        
        $input = Input::all();
        $input['slug'] = str_replace(" ", "-", (strtolower($input['name'])));
        Poblacion::create($input);

        return Redirect::route('poblacions.index')->with('message', 'poblacio created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Poblacion $poblacion) {
        return view('poblacions.show', compact('poblacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Poblacion $poblacion) {
        return view('poblacions.edit', compact('poblacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function update(Poblacion $poblacion, Request $request) {
        
        $this->validate($request, $this->rules);
        
        $input = array_except(Input::all(), '_method');
        $input['slug'] = str_replace(" ", "-", (strtolower($input['name'])));
        $poblacion->update($input);

        return Redirect::route('poblacions.show', $poblacion->slug)->with('message', 'Poblacion updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Poblacion $poblacion) {
        $poblacion->delete();
        return Redirect::route('poblacions.index')->with('message', 'Poblacion deleted.');
    }

}
