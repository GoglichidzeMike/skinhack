<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Lead;
class DashboardController extends Controller


{
    public function __construct()
    {  
        $this->middleware(['auth']);
    }


    public function index()
    {
        $total_assessments = Assessment::count();
        $total_leads = Lead::count();

        return view('dashboard',['assessments' => $total_assessments, 'leads'=>$total_leads]);
    }

}
