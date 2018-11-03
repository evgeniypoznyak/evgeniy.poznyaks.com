<?php

namespace App\Http\Controllers;

use App\Picture;
use App\Project;
use Illuminate\Http\Request;

class PicturesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::orderBy('project_id')->orderBy('order')->get()->all();

        return view('pictures.index', compact('pictures'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::get()->all();

        return view('pictures.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'picture' => 'required | mimes:jpeg,jpg,png',
        ]);

        $request->picture->storeAs('img', $request->picture->getClientOriginalName());
        $data            = $request->all();
        $data['picture'] = $request->file('picture')->getClientOriginalName();
        Picture::create($data);
        return redirect()->back();
       // return redirect()->route('pictures.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture $picture
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Picture $picture
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        $projects = Picture::get()->all();

        return view('pictures.update', compact('projects', 'picture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Picture $picture
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        $this->validate($request, [
            'picture' => 'mimes:jpeg,jpg,png',
        ]);

        $data = $request->all();
        if (isset($data['picture'])){

            \Storage::delete('img/'.$picture->picture);
            $request->picture->storeAs('img', $request->picture->getClientOriginalName());
            $data['picture'] = $request->picture->getClientOriginalName();
        }
        $picture->update($data);
        return redirect()->back();
       //return redirect()->route('pictures.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture $picture
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        \Storage::delete('img/'.$picture->picture);
        $picture->delete();
        return redirect()->back();
       // return redirect()->route('pictures.index');
    }
}
