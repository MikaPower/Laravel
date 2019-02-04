<?php

namespace App\Http\Controllers;

use App\Abatjour;
use App\ImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Spatie\Glide\GlideImage;

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
        $abatjours = Abatjour::paginate(10);
        return view('abatjours.index', ['abatjours' => $abatjours]);
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
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
            'referencia'=> 'required',
            'name'=> 'required',
            'price'=> 'required',

        ]);
        $abatjour = new Abatjour();
        $abatjour->referencia = request('referencia');
        $abatjour->name = request('name');
        $abatjour->price = request('price');
        $abatjour->save();



        $originalImage= $request->file('filename');
        $thumbnailImage = Image::make($originalImage); //creates image
        $thumbnailImage->backup();
        $thumbnailPath = public_path().'/storage/thumbnail/'; //storage/public/thumbnail but symbolic link shortens
        $originalPath = public_path().'/storage/images/';
        $thumbnailImage->save($originalPath.$originalImage->getClientOriginalName(),100);
        $thumbnailImage->resize(400,400);
        $thumbnailImage->save($thumbnailPath.$originalImage->getClientOriginalName());
        $thumbnailImage->reset();
        $imagemodel= new ImageModel();
        $imagemodel->filename=$originalImage->getClientOriginalName();
        $imagemodel->abatjour_id=$abatjour->id;
        $imagemodel->save();
        return back()->with('success', 'Your images has been successfully Upload');



    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Abatjour $abatjour)
    {
        return view('abatjours.show',compact('abatjour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Abatjour $abatjour)
    {
        $this->authorize('view', $abatjour);
        return view('abatjours.edit', compact('abatjour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Abatjour $abatjour)
    {
        $this->authorize('view', $abatjour);
        request()->validate(['referencia','name','price']);
        $abatjour->update(request(['referencia','name','price']));
        return redirect('/abatjours');

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
