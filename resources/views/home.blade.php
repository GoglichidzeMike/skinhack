@extends('layouts.home')

@section('content')
    
<div class="w-full py-32 relative" id="how">
  <div class="absolute quarter-circle top-0 shadow-md bg-pink"></div>
  <style>


  .quarter-circle{
      width: 120px;
      height: 120px;
      /* background: #25283d; */
      border-radius: 0 0 120px 0;
      -moz-border-radius: 0 0 120px 0;
      -webkit-border-radius: 0 0 120px 0;
   }

   @media (min-width: 800px){

     .quarter-circle{
       width: 250px;
       height: 250px;
       /* background: #25283d; */
       border-radius: 0 0 250px 0;
       -moz-border-radius: 0 0 250px 0;
       -webkit-border-radius: 0 0 250px 0;
      }
    }

   

  </style>

  <div class="w-97 md:w-11/12 lg:w-9/12 mx-auto">
    <div class="texts w-full lg:w-2/3 mx-auto">
      <h2 class="text-center text-3xl text-secondary tect-medium mb-4 tracking-wider">This is how it works</h2>
      <p class="text-center text-secondary">A short descriptive text for the how it works section. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, dolor Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="w-full flex flex-col justify-center  items-center my-10">
       <div class="flex flex-wrap justify-center">
          <div class="w-56 flex flex-col justify-center items-center m-1 sm:m-4">
            <div class="relative">
              <div class="step">
                <p class="text-center text-xl">
                  Let's talk skin goals
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase opacity-75">Step 1</p>
              </div>
              <div class="absolute my-4 top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
            </div>
          </div>
          <div class="w-56 flex flex-col justify-center items-cente m-1 sm:m-4">
            <div class="relative">
              <div class="step">
                <p class="text-center text-xl ">
                  Upload selfie
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 2</p>
              </div>
              <div class="absolute  my-4 top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
            </div>
          </div>
          <div class="w-56 flex flex-col justify-center items-center m-1 sm:m-4">
            <div class="relative">
              <div class="step">
                <p class="text-center text-xl ">
                Time to create your game plan!
                Let our experts take a look
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 3</p>
              </div>
              <div class="absolute  my-4 top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
            </div>
          </div>
        </div> 
        <div class="flex flex-wrap justify-center">
          <div class="w-56 flex flex-col justify-center items-center m-1 sm:m-4">
            <div class="relative">
              <div class="step">
                <p class="text-center text-xl ">
                  We'll send you your routine & products
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 4</p>
              </div>
              <div class="absolute my-4  top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
            </div>
          </div>
          <div class="w-56 flex flex-col justify-center items-center m-1 sm:m-4">
            <div class="relative">
              <div class="step">
                <p class="text-center text-xl ">
                  We will check in with you to see if you're hitting your goals
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 5</p>
              </div>
              <div class="absolute  my-4 top-1 left-1 rounded-xl w-52 h-52 bg-primary bg-opacity-30"></div>
            </div>
          </div>
        </div>
    </div>
    {{-- CTA --}}
    <div class="text-center">
      <a href="#assesment" class="px-8 py-2 text-xl font-medium bg-white text-secondary border border-pink rounded-xl shadow-md  tracking-wider hover:bg-pink  hover:text-white  hover:shadow-xl transform hover:scale-105 inline-block transition duration-300 ease-out">Take the assement!</a>
      <p class="mt-4 text-secondary drop-shadow-md">Its fast and easy, no need to postpone</p>
    </div>

  </div>

</div>


<div class="w-full bg-third py-20" id="why">
  <div class="w-97 md:w-11/12 2xl:w-8/12 mx-auto flex flex-col-reverse lg:flex-row justify-between">
    <div class="w-full lg:w-1/2">
      <h3 class="text-3xl text-secondary  mb-4 tracking-wider text-center lg:text-left">Why choose us?</h3>
      <div class="my-8 flex flex-col space-y-6">

        <div class="reason">
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
  
    <div class="p-4 lg:p-0 mb-6 lg:m-0">
      <div class="relative flex">
        <img src="/image/home/why-section.jpg" alt="Skin care" class="rounded-lg relative mx-auto" style="z-index:100">
        <div class="lg:w-full h-full bg-secondary absolute bottom-2 right-2 rounded-lg shadow-xl" style="z-index:1"></div>
        <div class="lg:w-full h-full bg-primary absolute top-3 left-3 rounded-lg shadow-xl" style="z-index:1"></div>
      </div>
    </div>
  </div>

</div>

<div class="w-full bg-white py-40" id="assesment">
  <div class="w-97 md:w-8/12 mx-auto flex flex-col items-center space-y-8">
    <img src="/image/home/assesment-logo.svg" alt="Beauty icon" class="w-28 h-auto">
    <h3 class="text-2xl text-secondary tracking-wider text-center md:text-left">Take the assessment right now</h3>
    <p class="text-secondary text-center md:text-left">Last what are you waiting for text, the very last call to action goes here.</p>

    <a href="#" class="diag-btn flex items-center text-secondary px-8 py-2 tracking-widest border border-secondary hover:shadow-xl">Start your diagnostic <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path id="icon" d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" fill="#25283d"/></svg></a>
  </div>
</div>

@include('dashboard.includes.contact')

<style>

.diag-btn::before{
  content: "";
  width: 100%;
  height: 100%;
  background: #FE9399;
  top: 0;
  left: 0;
  position:absolute;
  width: 0;
  transition: all 0.2s ease-in;
  z-index: -1;
}

.diag-btn{
  transition: all 0.2s ease-in;
  z-index: 10;
}
.diag-btn:hover{
  color: white;
  position: relative;
}


.diag-btn:hover #icon{
  fill:white;
}

.diag-btn:hover::before{
  width: 100%;
}





</style>





@endsection