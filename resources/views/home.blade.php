@extends('layouts.home')

@section('content')
    
<div class="w-full py-32 relative">
  <div class="absolute quarter-circle top-0 shadow-md bg-secondary"></div>
  <style>
    .quarter-circle{
      width: 250px;
      height: 250px;
      /* background: #25283d; */
      border-radius: 0 0 250px 0;
      -moz-border-radius: 0 0 250px 0;
      -webkit-border-radius: 0 0 250px 0;
   }
  </style>

  <div class="w-8/12 mx-auto">
    <div class="texts w-2/3 mx-auto">
      <h2 class="text-center text-3xl text-secondary tect-medium mb-4 tracking-wider">This is how it works</h2>
      <p class="text-center text-secondary">A short descriptive text for the how it works section. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, dolor Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="w-full flex justify-between my-20">      
      <div class="w-56 flex flex-col justify-center items-center">
        <div class="relative">
          <div class="step">
            <p class="text-center text-xl">
              Let's talk skin goals
            </p>
            <p class="absolute bottom-1 text-center text-sm uppercase opacity-75">Step 1</p>
          </div>
          <div class="absolute top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
        </div>
      </div>
      <div class="w-56 flex flex-col justify-center items-center">
        <div class="relative">
          <div class="step">
            <p class="text-center text-xl ">
              Upload selfie
            </p>
            <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 2</p>
          </div>
          <div class="absolute top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
        </div>
      </div>
      <div class="w-56 flex flex-col justify-center items-center">
        <div class="relative">
          <div class="step">
            <p class="text-center text-xl ">
             Time to create your game plan!
             Let our experts take a look
            </p>
            <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 3</p>
          </div>
          <div class="absolute top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
        </div>
      </div>
      <div class="w-56 flex flex-col justify-center items-center">
        <div class="relative">
          <div class="step">
            <p class="text-center text-xl ">
              We'll send you your routine & products
            </p>
            <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 4</p>
          </div>
          <div class="absolute top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
        </div>
      </div>
      <div class="w-56 flex flex-col justify-center items-center">
        <div class="relative">
          <div class="step">
            <p class="text-center text-xl ">
              We will check in with you to see if you're hitting your goals
            </p>
            <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 5</p>
          </div>
          <div class="absolute top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
        </div>
      </div>
    </div>
    {{-- CTA --}}
    <div class="text-center">
      <a href="#" class="px-8 py-2 text-xl font-medium bg-white text-secondary border border-secondary rounded-2xl shadow-md  tracking-wider hover:bg-third hover:text-secondary  hover:shadow-xl transition duration-300 ease-out">Take the assement!</a>
      <p class="mt-4 text-secondary drop-shadow-md">Its fast and easy, no need to postpone</p>
    </div>

  </div>

</div>


<div class="w-full bg-third py-20" id="why">
  <div class="w-8/12 mx-auto flex justify-between">
    <div class="w-1/2">
      <h3 class="font-medium text-3xl text-secondary">Why choose us?</h3>
      <div class="my-8 flex flex-col space-y-6">

        <div class="reason ">
          <img src="/image/home/ico-1.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Reason header</p>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, laboriosam!</p>
          </div>
        </div>
        <div class="reason">
          <img src="/image/home/ico-2.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Very Affordable</p>
            <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry!</p>
          </div>
        </div>
        <div class="reason">
          <img src="/image/home/ico-3.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Convinient</p>
            <p class="text-secondary">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
          </div>
        </div>
        <div class="reason">
          <img src="/image/home/ico-4.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Team of Professionals</p>
            <p class="text-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form!</p>
          </div>
        </div>
        
      </div>
    </div>
  
    <div class="">
      <div class="relative">
        <img src="/image/home/why-section.jpg" alt="Skin care" class="rounded-lg relative" style="z-index:100">
        <div class="w-full h-full bg-secondary absolute bottom-2 right-2 rounded-lg shadow-xl" style="z-index:1"></div>
        <div class="w-full h-full bg-primary absolute top-3 left-3 rounded-lg shadow-xl" style="z-index:1"></div>
      </div>
    </div>
  </div>

</div>



@endsection