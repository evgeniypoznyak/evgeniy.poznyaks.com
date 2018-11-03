<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactMessage;
use App\Project;
use App\Skill;
use Illuminate\Http\Request;
use Validator;

class PagesController extends Controller
{

    public function index()
    {

        $resumeFile = \Storage::files('docs/resume');
        if (isset($resumeFile[0])) {
            $resumeFile = $resumeFile[0];
        } else {
            $resumeFile = '#';
        }

        $skills = Skill::orderBy('order')->get()->all();

        $companiesPro = Project::getProProjects();

        $companiesPersonal = Project::getPersonalProjects();

        return view('index', compact('skills', 'resumeFile', 'companiesPro', 'companiesPersonal'));
    }

    public function singleProject(Project $project)
    {
        $resumeFile = \Storage::files('docs/resume');
        if (isset($resumeFile[0])) {
            $resumeFile = $resumeFile[0];
        } else {
            $resumeFile = '#';
        }
        if (sizeof($project->pictures) > 0){
            $pictures      = $project->pictures;
            $picturesCount = $pictures->count();
            return view('pages.projects.single', compact('picturesCount', 'pictures', 'resumeFile'));
        } else {

            return view('pages.projects.single_nopic', compact('resumeFile', 'project'));

        }





    }


    public function contact()
    {
        return view('pages.contacts.index');
    }


    public function send( Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:36',
            'email' => 'required|email|max:254',
            'message' => 'required|max:1500',
        ]);


//      if ($request->ajax()) {
//
//            $this->validate($request, [
//                'name' => 'required|max:36',
//                'email' => 'required|email|max:254',
//                'message' => 'required|max:1500',
//            ]);
//
//        }


      $data = $request->all();

        \Mail::send(['html' => 'emails.contact'], ['data' => $data], function ($message) {
            $message->from('webmaster@evgeniy.poznyaks.com', 'WebMaster');
            $message->subject('Message from evgeniy.poznyaks.com');
            $message->to(env("MAIL_RECEIVER"), 'Evgeniy');
        });


        die();

       // return redirect()->route('home');

    }


}
