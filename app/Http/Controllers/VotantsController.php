<?php

namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Poblacion;
use App\Votant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VotantsController extends Controller {

    protected $rules = [
        'name' => ['required', 'min:2'],
        'dni' => ['required', 'alpha_num', 'size:9', 'regex:/^[0-9]{8}[A-Z]$/'],
        'dataNaixement' => ['required', 'date'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Poblacion $poblacion) {
        return view('votants.show', compact('poblacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Poblacion $poblacion) {
        return view('votants.create', compact('poblacion'));
    }

    /**
     * 
     * @param Poblacion $poblacion
     * @param Request $request
     * @return type
     */
    public function store(Poblacion $poblacion, Request $request) {

        $this->validate($request, $this->rules);

        $input = Input::all();
        $input['poblacion_id'] = $poblacion->id;
        $input['slug'] = str_replace(" ", "-", (strtolower($input['name'])));
        Votant::create($input);

        return Redirect::route('poblacions.show', $poblacion->slug)->with('message', 'Votant created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Poblacion $poblacion, Votant $votant) {
        return view('votants.show', compact('poblacion', 'votant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Poblacion $poblacion, Votant $votant) {
        return view('votants.edit', compact('poblacion', 'votant'));
    }

    /**
     * 
     * @param Poblacion $poblacion
     * @param Votant $votant
     * @param Request $request
     * @return type
     */
    public function update(Poblacion $poblacion, Votant $votant, Request $request) {

        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), array('_method', 'dni'));
        $input['slug'] = str_replace(" ", "-", (strtolower($input['name'])));
        $votant->update($input);

        return Redirect::route('poblacions.votants.show', [$poblacion->slug, $votant->slug])->with('message', 'Votant updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Poblacion $poblacion, Votant $votant) {
        $votant->delete();

        return Redirect::route('poblacions.show', $poblacion->slug)->with('message', 'votant deleted.');
    }

}
