<?php

namespace App\Http\Controllers;

use App\Mail\QuizSubmitted;
use App\Models\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {

        return view('home', [
            'title' => 'Skinhack - Ingredients Over Hype'
            ]);
    }
    
    public function email()
    {

        $single = Assessment::find(1);

        Mail::to('goglichidze.mike@gmail.com')->send(new QuizSubmitted($single));

    }


    public function quiz_store(Request $request)
    {

        // dd($request);


        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'age'=>  'required|max:255',
            'email'=> 'required|max:255',
            'questionTwo'=>  'required|max:255',
            'questionThree'=> 'required|max:255',
            'questionFour'=> 'required|max:255',
            'questionFive'=>  'required|max:255',
            'questionSix'=> 'required|max:255',
            'questionSeven'=> 'required|max:255',
            'questionEight'=>  'required|max:255',
            'questionNine'=>  'required|max:255',
            'questionTen'=>  'required|max:255',
            'questionEleven'=> 'required|max:255',
            'questionExtra'=>  'required|max:500',
            'imageOne' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            'imageTwo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            'imageThree' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
        ]);


        if ($validator->fails()) {
            return redirect(url()->previous() .'#assesment')
                    ->withErrors($validator)
                    ->withInput();
        }



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




        $single = Assessment::create(
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


        Mail::to('hello@skinhack.ae')->cc('alwalireem@gmail.com')->send(new QuizSubmitted($single));

        return redirect(url()->previous().'#assesment')->with('status', 'Your assessment was successfully sent');

    }


}

