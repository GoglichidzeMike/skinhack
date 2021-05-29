<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    public function index()
    {

        return view('home', [
            'title' => 'Home Page - Skinhack'
            ]);
    }
    
    public function quiz()
    {
        return view('quiz', [
            'title' => 'Quiz - Skinhack'
            ]);
    }


    public function quiz_store(Request $request)
    {

        // dd($request);


        $validated = $request->validate([
            'name' => 'required|max:255',
            'imageOne' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            'imageTwo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            'imageThree' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
        ]);
        

        $destinationPath = 'uploads/image/';

        $imageOne = $request->file('imageOne');
        $imageOneName = "selfie-3-" . date('YmdHis') . "." . $imageOne->getClientOriginalExtension();
        $imageOne->move($destinationPath, $imageOneName);
        
        $imageTwo = $request->file('imageTwo');
        $imageTwoName = "selfie-2-" . date('YmdHis') . "." . $imageTwo->getClientOriginalExtension();
        $imageTwo->move($destinationPath, $imageTwoName);

        $imageThree = $request->file('imageThree');
        $imageThreeName = "selfie-1-" . date('YmdHis') . "." . $imageThree->getClientOriginalExtension();
        $imageThree->move($destinationPath, $imageThreeName);

        
        $input['category'] = $request->input('category');




        Assessment::create(
            [
            'name'=>$request->name,
            'age'=> $request->age,
            'email'=>$request->email,
            'imageOne' => $imageOneName,        
            'imageTwo' => $imageTwoName,        
            'imageThree' => $imageThreeName, 
            'questionTwo'=> json_encode($_POST['questionTwo']),
            'questionThree'=> $request->questionThree,
            'questionFour'=> json_encode($_POST['questionFour']),
            'questionFive'=> json_encode($_POST['questionFive']),
            'questionSix'=> $request->questionSix,
            'questionSeven'=> $request->questionSeven,
            'questionEight'=> $request->questionEight,
            'questionNine'=> json_encode($_POST['questionNine']),
            'questionTen'=> $request->questionTen,
            'questionEleven'=> $request->questionEleven,
            'questionExtra'=> $request->questionExtra,
            ]
        );



            return redirect(url()->previous().'#assesment')->with('status', 'Your assessment was successfully sent');

    }


}
