@extends('layouts.home')

@section('content')
<div class="w-full">
  <div class="w-full mx-auto min-h-544 flex flex-col-reverse lg:flex-row md:justify-between" >
    <div class="w-full md:w-8/12 lg:w-4/12 mx-auto flex items-center">
      <div class="w-11/12 mx-auto lg:w-auto lg:mx-0">
        <img src="/image/home/header-logo.png" alt="skinhack logo orange" class="w-48 h-auto mx-auto">
        <div class="h-1 rounded mt-4 mb-2 w-full md:w-10/12 mx-auto bg-secondary bg-opacity-80"></div>
        <h1 class="uppercase font-light tracking-widestXl text-center">ingredients over hype</h1>
        <p class="text-secondary my-4">
          Too many products, too many steps, too many promises, and lengthy trials & errors...
        </p>
        <p class="font-bold text-secondary mb-4">
          Skin care shouldn't be THIS complicated!
        </p>
        <p class="text-secondary mb-4">
          Our mission is to <span class="font-bold">custom design your beauty game plan</span> to get the best out of your skin, so you can give your best to life!
        </p>
        <p class="text-secondary mb-4">
          We'll hold your hand through the process - saving you the time, the overspending, the misinformed recommendations and skin oopsies!
        </p>
        <p class="text-secondary font-bold mb-8">
          Ready for your best skin yet?
        </p>
        <div class="mx-auto md:m-0 flex sm:block justify-center">
          <a href="#how" class="px-6 py-2 text-xs sm:text-base rounded-md text-secondary font-medium border-secondary  border hover:shadow-xl hover:bg-pink  hover:text-white transition duration-200 ease-linear">See how it works</a>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-7/12 flex items-center m-0 mb-4">
      <img src="/image/home/header.jpg" alt="Girls Smiling Selfie" class="w-full lg:rounded-bl shadow-lg">
    </div>
  </div> 
</div>





<div class="w-full py-32 relative" id="how">
  <div class="w-97 md:w-11/12 lg:w-10/12 mx-auto">
    <div class="texts w-full lg:w-2/3 mx-auto">
      <h2 class="text-center text-3xl text-secondary tect-medium mb-4 tracking-wider">This is how it works</h2>
      <p class="text-center text-secondary">We’ll ask you some quick questions and take a few snaps so our skin expert can analyse your skin and select the best products for you.</p>
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
      <a href="#assesment" class="px-8 py-2 text-xl font-medium bg-white text-secondary border border-pink rounded-xl shadow-md  tracking-wider hover:bg-pink  hover:text-white  hover:shadow-xl transform hover:scale-105 inline-block transition duration-300 ease-out">Take your skin analysis!</a>
      <p class="mt-4 text-secondary drop-shadow-md">Its fast and easy, no need to postpone</p>
    </div>

  </div>

</div>


<div class="w-full bg-third py-20" id="why">
  <div class="w-97 md:w-11/12 2xl:w-8/12 mx-auto flex flex-col-reverse lg:flex-row justify-between">
    <div class="w-full lg:w-7/12 lg:mr-4">
      <h3 class="text-3xl text-secondary  mb-4 tracking-wider text-center lg:text-left">Why choose us?</h3>
      <div class="my-8 flex flex-col space-y-6">

        <div class="reason">
          <img src="/image/home/ico-1.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Skin Expertise</p>
            <p class="text-secondary text-sm">Your analysis is done by a registered and experienced dermatologist with a duty of care. We know our stuff so we’ll always be honest if we think skin care shouldn’t be the main priority in your particular case. Count on us to point you in the right direction.</p>
          </div>
        </div>
        <div class="reason">
          <img src="/image/home/ico-2.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Transparency</p>
            <p class="text-secondary text-sm">We are not affiliated with any brands nor do we own any. We’re just here to help you select the right products based on ingredients, reputability & your skin goals. Let’s take the guesswork out.</p>
          </div>
        </div>
        <div class="reason">
          <img src="/image/home/ico-3.svg" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">Save your time for what matters</p>
            <p class="text-secondary text-sm">No more time-consuming trial & error, dealing with pesky sellers & shopping around. We’ll deliver everything together to your door and give you the best bang for your buck - your beauty isn’t a luxury! </p>
          </div>
        </div>
        <div class="reason">
          <img src="/image/home/ico-4.png" alt="Beauty Icon" class="w-20 h-auto mr-4">
          <div class="">
            <p class="text-xl text-secondary font-medium">We care</p>
            <p class="text-secondary text-sm">We’ll keep checking in with you to make sure your routine is showing results you're happy with. We’ll be here for your questions, concerns and to revise your routine when needed.</p>
          </div>
        </div>
        
      </div>
    </div>
  
    <div class="p-4 lg:p-0 mb-6 lg:m-0 flex items-center justify-center">
      <div class="flex">
        <img src="/image/home/why-section.jpg" alt="Skin care" class="rounded-lg relative mx-auto h-80 lg:h-auto shadow-xl" style="z-index:40">
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