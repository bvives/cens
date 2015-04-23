<?php

namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Poblacion;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoblacionsController extends Controller {
    
    protected $guarded = [];

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
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = Input::all();
        $input['slug']=  str_replace(" ", "-", (strtolower($input['name'])));
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
     * @return Response
     */
    public function update(Poblacion $poblacion) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Poblacion $poblacion) {
        //
    }

}
