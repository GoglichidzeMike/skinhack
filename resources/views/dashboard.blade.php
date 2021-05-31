@extends('layouts.app')

@section('content')
    

<div class="flex flex-col items-center" >
  <div class="w-97 my-4 md:w-8/12 bg-white p-6 rounded-lg flex flex-col items-center">
    <p class="text-center text-lg font-medium">
      Dashboard
    </p> 
    <div class="sm:flex mx-auto">
      <div class="my-6 w-60 flex flex-col justify-center items-center border border-gray-500 rounded px-4 py-6 sm:mr-4">
        <h2 class="text-lg font-medium text-center">Quiz entries</h2>
        <p class="my-4 text-center" >Total assessments: <span class="font-medium">{{ $assessments }}</span></p>
            <a href="{{ route('assessment.index') }}" class="mx-auto px-4 py-2 border border-pink bg-secondary text-white rounded-lg text-xs hover:bg-pink transition-colors duration-200 ease-linear">See all the submissions</a>
      </div>
      <div class="my-6 w-60 flex flex-col justify-center items-center border border-gray-500 rounded px-4 py-6">
        <h2 class="text-lg font-medium text-center">Contact entries</h2>
        <p class="my-4 text-center" >Total Leads: <span class="font-medium">{{ $leads }}</span></p>
        <a href="{{ route('lead.dashboard') }}" class="mx-auto px-4 py-2 border border-pink bg-secondary text-white rounded-lg text-xs hover:bg-pink transition-colors duration-200 ease-linear">See all the submissions</a>
      </div>
    </div>
  </div>
</div>

@endsection