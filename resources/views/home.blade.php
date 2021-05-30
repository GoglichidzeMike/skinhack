@extends('layouts.home')

@section('content')
    
<div class="w-full py-32 relative" id="how">


  <div class="w-97 md:w-11/12 lg:w-10/12 mx-auto">
    <div class="texts w-full lg:w-2/3 mx-auto">
      <h2 class="text-center text-3xl text-secondary tect-medium mb-4 tracking-wider">This is how it works</h2>
      <p class="text-center text-secondary">A short descriptive text for the how it works section. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, dolor Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="w-full flex flex-row justify-center  items-center my-10 flex-wrap">
              <div class="step">
                <p class="text-center text">
                  Let's talk skin goals
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase opacity-75">Step 1</p>
              </div>
              <div class="step">
                <p class="text-center text">
                  Upload selfie
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 2</p>
              </div>
              <div class="step">
                <p class="text-center text">
                Time to create your game plan!
                Let our experts take a look
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 3</p>
              </div>
              <div class="step">
                <p class="text-center text">
                  We'll send you your routine & products
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 4</p>
              </div>
              <div class="step">
                <p class="text-center text">
                  We will check in with you to see if you're hitting your goals
                </p>
                <p class="absolute bottom-1 text-center text-sm uppercase  opacity-75">Step 5</p>
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
            <p class="text-secondary text-sm sm:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, laboriosam!</p>
          </div>
        </div>
        <div class="reason">
          <img src="/image/home/ico-2.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Very Affordable</p>
            <p class="text-secondary text-sm sm:text-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry!</p>
          </div>
        </div>
        <div class="reason">
          <img src="/image/home/ico-3.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Convinient</p>
            <p class="text-secondary text-sm sm:text-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
          </div>
        </div>
        <div class="reason">
          <img src="/image/home/ico-4.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Team of Professionals</p>
            <p class="text-secondary text-sm sm:text-base">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form!</p>
          </div>
        </div>
        
      </div>
    </div>
  
    <div class="p-4 lg:p-0 mb-6 lg:m-0">
      <div class="flex">
        <img src="/image/home/why-section.jpg" alt="Skin care" class="rounded-lg relative mx-auto h-80 lg:h-auto " style="z-index:40">
        {{-- <div class="lg:w-full h-full bg-secondary absolute bottom-2 right-2 rounded-lg shadow-xl" style="z-index:1"></div>
        <div class="lg:w-full h-full bg-primary absolute top-3 left-3 rounded-lg shadow-xl" style="z-index:1"></div> --}}
      </div>
    </div>
  </div>

</div>

<div id="assesment">
  @include('includes.quiz')
</div>
@include('includes.contact')

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