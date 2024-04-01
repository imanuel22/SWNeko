<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Element;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.element.index',[
            'elements' => Element::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.element.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|unique:elements|max:255',
            'slug'=>'required|unique:elements',
            'image'=>'required|image|file|max:1024',
        ]);

        if($request->file('image')){
            $validatedData['image']= $request->file('image')->storeAs('elements',$validatedData['slug'].'.'.$validatedData['image']->extension());
        }

        Element::create($validatedData);
        return redirect('/dashboard/element')->with('success','New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(element $element)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(element $element)
    {
        return view('dashboard.element.edit',[
            'element' => $element,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, element $element)
    {
        $rules = [
            'image'=>'image|file|max:1024',
        ];

        if($request->name !=$element->name){
            $rules['name'] = 'required|unique:elements';
        }

        if($request->slug !=$element->slug){
            $rules['slug'] = 'required|unique:elements';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image']= $request->file('image')->storeAs('elements',$request->slug.'.'.$validatedData['image']->extension());
        }

        Element::where('id',$element->id)->update($validatedData);
        return redirect('/dashboard/element')->with('success','Elements has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Element $element)
    {
        if($element->image){
            Storage::delete($element->image);
        }
        Element::destroy($element->id);
        return redirect('/dashboard/element')->with('success','elements has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Element::class,'slug',$request->name);
        return response()->json(['slug'=>$slug]);
    }
}
