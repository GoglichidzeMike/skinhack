<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AssessmentController extends Controller
{

    public function __construct()
    {  
        $this->middleware(['auth']);
    }
 
 
    public function index()
    {
        $assessments = Assessment::orderBy('created_at', 'desc')->paginate(12); 
        
        return view('dashboard.assessment.index', [ 
            'assessments' => $assessments
        ]);
    }

    public function show($id)
    {
        $assessment = Assessment::find($id);
        return view('dashboard.assessment.show', ['single'=>$assessment]);
    }


    public function destroy($id)
    {
        $assessment = Assessment::find($id);
        $assessment->delete();
        
        File::delete('uploads/image/'.$assessment->imageOne);
        File::delete('uploads/image/'.$assessment->imageTwo);
        File::delete('uploads/image/'.$assessment->imageThree);

        return redirect()->route('assessment.index')->with('status', 'Entry deleted successfully');
    }
}
