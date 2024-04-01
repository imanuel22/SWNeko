<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Routing\Controller;
use App\Models\Path;
use Illuminate\Http\Request;

class PathController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.path.index',[
            'paths' => Path::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.path.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|unique:path|max:255',
            'slug'=>'required|unique:path',
            'image'=>'required|image|file|max:1024',
        ]);

        if($request->file('image')){
            $validatedData['image']= $request->file('image')->storeAs('path',$validatedData['slug'].'.'.$validatedData['image']->extension());
        }

        Path::create($validatedData);
        return redirect('/dashboard/path')->with('success','New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Path $path)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Path $path)
    {
        return view('dashboard.path.edit',[
            'path' => $path,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Path $path)
    {
        $rules = [
            'image'=>'image|file|max:1024',
        ];

        if($request->name !=$path->name){
            $rules['name'] = 'required|unique:paths';
        }

        if($request->slug !=$path->slug){
            $rules['slug'] = 'required|unique:paths';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']= $request->file('image')->storeAs('path',$request->slug.'.'.$validatedData['image']->extension());
        }

        Path::where('id',$path->id)->update($validatedData);
        return redirect('/dashboard/path')->with('success','Path has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Path $path)
    {
        if($path->image){
            Storage::delete($path->image);
        }
        Path::destroy($path->id);
        return redirect('/dashboard/path')->with('success','path has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Path::class,'slug',$request->name);
        return response()->json(['slug'=>$slug]);
    }
}
