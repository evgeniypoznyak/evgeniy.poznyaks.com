<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // Skill::get()->groupBy('category');
       // Skill::orderBy('order')->get()->groupBy('category')->all();

       // $pages = Skill::orderBy('order')->get()->groupBy('category', 'title')->all();
      //  dd($pages);

        $skills = Skill::orderBy('order')->get()->all();

       return view('skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skill = Skill::get()->last();
        return view('skills.create', compact('skill'));
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
        Skill::create($data);

        return redirect()->route('skills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill $skill
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill $skill
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('skills.update', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Skill $skill
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $this->validate($request, [
            'picture' => 'mimes:jpeg,jpg,png',
        ]);

        $data = $request->all();
        if (isset($request->picture)){

            \Storage::delete('img/'.$skill->picture);
            $request->picture->storeAs('img', $request->picture->getClientOriginalName());
            $data['picture'] = $request->picture->getClientOriginalName();
        }
        $skill->update($data);
        return redirect()->back();
       // return redirect()->route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill $skill
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        \Storage::delete('img/'.$skill->picture);
        $skill->delete();
        return redirect()->route('skills.index');
    }

    public function resumeshow()
    {
        return view('resume');
    }

    public function resumestore(Request $request)
    {

        $data = $request->all();

        if (isset($request->resume)){
              \Storage::deleteDirectory('docs/resume');
            $request->resume->storeAs('docs/resume', $request->resume->getClientOriginalName());

        }

        return redirect()->route('admin');
    }



}
