
@extends('layouts.app')

@section('content')
  <?php
// dd($single->name)
?>

<div class="flex flex-col items-center text-secondary">
  <div class="w-97 md:w-8/12 bg-white py-6 px-2 md:p-6 mb-10 rounded-lg">
    <h2 class="text-2xl sm:text-3xl mb-6">
      {{$single->name}}      
    </h2>

    <div class="my-1">
      <span class="font-medium mr-3 my-1">Email: </span><span>{{ $single->email }}</span>
    </div>
    <div class="my-1 flex">
      <span class="font-medium mr-3">Name: </span><span>{{ $single->name }}</span>
    </div>
    <span class="font-medium mr-3 my-1">Age: </span><span>{{ $single->age }}</span>
    <div class="my-1">
      <span class="font-medium mr-3 my-1">Gender: </span><span>{{ $single->questionEleven }}</span>
    </div>
    <div class="mt-1 mb-6">
      <span class="font-medium mr-3">Date: </span><span>{{ $single->created_at->toDayDateTimeString() }}</span>
    </div>

    <div class="my-4">
      <p class="font-medium mr-3">What is your skin type?</p>
      <p class="text-secondary ml-4">

        <?php
          $newStr = str_replace('"','',str_replace("]","",str_replace("[","", str_replace('",', "<br>", $single->questionTwo))));
          echo $newStr
        ?>
      </p>
    </div>

    <div class="my-4">
      <p class="font-medium mr-3">Do you have sensitive skin?</p>
      <p class="text-secondary ml-4">
        {{$single->questionThree}}
      </p>
    </div>



    <div class="my-4">
      <p class="font-medium mr-3">What are your main skin concerns?</p>
      <p class="text-secondary ml-4">

        <?php
          $newStr = str_replace('"','',str_replace("]","",str_replace("[","", str_replace('",', "<br>", $single->questionFour))));
          echo $newStr
        ?>
      </p>
    </div>



    <div class="my-4">
      <p class="font-medium mr-3">Do you have any concerns about your eye area?</p>
      <p class="text-secondary ml-4">

        <?php
          $newStr = str_replace('"','',str_replace("]","",str_replace("[","", str_replace('",', "<br>", $single->questionFive))));
          echo $newStr
        ?>
      </p>
    </div>


    <div class="my-4">
      <p class="font-medium mr-3">What has been your experience with skincare so far?</p>
      <p class="text-secondary ml-4">
        {{$single->questionSix}}
      </p>
    </div>
    <div class="my-4">
      <p class="font-medium mr-3">What can we help you with?</p>
      <p class="text-secondary ml-4">
        {{$single->questionSeven}}
      </p>
    </div>
    <div>
      <p class="font-medium mr-3">How much time do you have to spend on a skincare routine?</p>
      <p class="text-secondary ml-4">
        {{$single->questionEight}}
      </p>
    </div>



    <div class="my-4">
      <p class="font-medium mr-3">What do you currently use?</p>
      <p class="text-secondary ml-4">

        <?php
          $newStr = str_replace('"','',str_replace("]","",str_replace("[","", str_replace('",', "<br>", $single->questionNine))));
          echo $newStr
        ?>
      </p>
    </div>


    <div class="my-4">
      <p class="font-medium mr-3">What is your monthly budget on skincare?</p>
      <p class="text-secondary ml-4">
        {{$single->questionTen}}
      </p>
    </div>
    
    <div class="my-4">
      <p class="font-medium mr-3">Extra info</p>
      <p class="text-secondary ml-4">
        {{$single->questionExtra}}
      </p>
    </div>


    <div class="my-4">
      <p class="text font-semibold">Selfies</p>
      <div class="my-4">
        <a href="/uploads/image/{{$single->imageOne}}" target="_blank" rel="nofollow" class="px-2 py-1 border-secondary border rounded-lg hover:bg-pink hover:text-white">Selfie #1</a>
        <a href="/uploads/image/{{$single->imageTwo}}" target="_blank" rel="nofollow" class="px-2 py-1 border-secondary border rounded-lg hover:bg-pink hover:text-white">Selfie #2</a>
        <a href="/uploads/image/{{$single->imageThree}}" target="_blank" rel="nofollow" class="px-2 py-1 border-secondary border rounded-lg hover:bg-pink hover:text-white">Selfie #3</a>
      </div>
    </div>



    <div class="flex">
        <a href="{{ route('assessment.index') }}" class="text-dark border border-blue-500 px-4 py-1 rounded hover:bg-blue-700 hover:text-white font-medium transition duration-200 ease-in-out tracking-widest cursor-pointer">All Leads</a>
      <form action="{{ route('assessment.destroy', $single->id) }}" method="POST" class="ml-4">
          @csrf
          <button type="submit" class=" text-dark border border-red-500 px-4 py-1 rounded hover:bg-red-700 hover:text-white font-medium transition duration-200 ease-in-out tracking-widest" onclick="return confirm('Are you sure? This will forever delete this lead.')">Delete</button>
        </form>
      </div>
    </div>


  </div>
</div>

@endsection