<?php

namespace App\Http\Controllers;

use App\Curriculum;

use App\Http\Requests;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the curriculum dashboard.
     *
     * @return curriculum/index
     */
    public function index(Request $request)
    {
        $Curriculums = Curriculum::where('user_id', $request->user()->id)->get();

        return view('curriculum/index',[
            'curriculums' => $Curriculums
        ]);
    }

    /**
     * Create a new curriculum.
     *
     * @param Request request
     * @retrun Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $uniqCheck = $request->user()->curriculum()->where('name',$request->name)->get();

        if( count($uniqCheck) != 0 ) {
            return redirect('/curriculum')
                ->withErrors("Duplicate curriculum name");
        }

        $request->user()->curriculum()->create([
            'name' => $request->name,
        ]);
        return redirect('/curriculum');
    }
        
}
