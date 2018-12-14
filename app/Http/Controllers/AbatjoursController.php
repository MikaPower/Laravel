<?php

namespace App\Http\Controllers;

use App\Abatjours;
use Illuminate\Http\Request;

class AbatJoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('abatjours.index', ['abatjours' => Abatjours::all()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abatjours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $abatjour = new Abatjours();

        $abatjour->referencia = request('referencia');
        $abatjour->name = request('name');
        $abatjour->price = request('price');

        $abatjour->save();
        return redirect('/abatjours');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $abatjour = Abatjours::find($id);

        return view('abatjours.edit', compact('abatjour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $abatjour = Abatjours::find($id);
        $abatjour->referencia = request('referencia');
        $abatjour->name = request('name');
        $abatjour->price = request('price');

        $abatjour->save();

        return redirect('abatjours');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Abatjours::find($id)->delete();
        return redirect('/abatjours');
    }
}
