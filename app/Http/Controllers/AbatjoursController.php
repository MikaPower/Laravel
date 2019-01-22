<?php

namespace App\Http\Controllers;

use App\Abatjours;
use App\ImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

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
        $image = ImageModel::latest()->first();
        return view('abatjours.create', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
            'referencia'=> 'required',
            'name'=> 'required',
            'price'=> 'required',

        ]);
        $abatjour = new Abatjours();

        $originalImage= $request->file('filename');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        $imagemodel= new ImageModel();
        $imagemodel->filename=time().$originalImage->getClientOriginalName();


        $imagemodel->abatjours=$abatjour->id;
        $imagemodel->save();





        $abatjour->referencia = request('referencia');
        $abatjour->name = request('name');
        $abatjour->price = request('price');

        $abatjour->save();

        return back()->with('success', 'Your images has been successfully Upload');



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
