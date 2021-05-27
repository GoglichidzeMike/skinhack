<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <meta name="description" content="Skinhack Website" />
  
  {{-- <meta property="og:site_name"          content="Psychotherapy.ge ფსიქოლოგია ყოველდღიურ ცხოვრებაში" />
  <meta property="og:url"                contnet="<?php echo url()->current() ?>">
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="{{ $title }}" />
  <meta property="og:locale"             content="ka_GE" />
  <meta property="og:description"        content="ფსიქოლოგია ყოველდღიურ ცხოვრებაში. კლინიკური ფსიქოლოგი ირმა კვაჭაძე" />
  @isset($image) <meta property="og:image"              content="{{ $image }}" />@endisset
  @empty($image) <meta property="og:image"              content="https://psychotherapy.ge/image/fb-share.jpg" />@endempty --}}
  
  
  <link rel="stylesheet preload" as="style" href="{{ asset('css/app.css') }}">

  <script src="/js/app.js" defer></script>
  <script src="/js/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" rel="preload" as="script"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

<title>{{ $title }}</title>
</head>

<body class="bg-white min-h-screen flex justify-between flex-col overflow-visible">
  <a id="button"></a>
  <div class="hero">

    <div class="nav w-full z-10 md:h-auto  overflow-hidden md:overflow-visible">
      <div class="py-4 w-95  xl:w-8/12 relative mx-auto md:flex justify-between items-center">
        <a href="{{ route('home') }}" class="font-medium text-2xl color-primary">
          <img src="/image/home/logo.png" class="w-10 h-10" alt="Skinhac Logo">  
        </a>
          <div class="burger absolute top-3 right-2 md:hidden cursor-pointer">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        <ul class="flex flex-col md:flex-row md:items-center text-white space-y-2 my-4 md:m-0 md:space-x-6 md:space-y-0">
          <li>
            <a href="{{ route('home') }}" class="nav-link">Home</a>
          </li>
          <li>
            <a href="#" class="nav-link">Secion 1</a>
          </li>
          <li>
            <a href="#" class="nav-link">Second</a>
          </li>
          <li>
            <a href="#" class="nav-link">Third</a>  
          </li>
        </ul>
        <a href="/#contact" class="text-sm md:text-base bg-secondary py-1 px-8 shadow-md text-white font-medium rounded-xl hover:text-secondary hover:bg-white hover:shadow-lg transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary">Contact</a>
        </ul>
      </div>
    </div>
    <div class="w-8/12 mx-auto py-20 min-h-544 flex">
      <div class="w-1/2">
        <h1 class="text-white  text-5xl">Header text goes here! We can make it shrot or long, its entirely up to you!</h1>
        <p class="text-white my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus non suscipit nesciunt voluptatum. Assumenda odio, labore dolorum tempore minima quas?
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <div class="mx-auto md:m-0">
          {{-- <a href="#contact" class="px-6 py-2 bg-white rounded-xl font-medium text-dark shadow-md hover:shadow-xl hover:bg-secondary  hover:text-white transition duration-300 ease-linear mr-6">Talk to us!</a> --}}
          <a href="#contact" class="px-6 py-2 bg-secondary rounded-xl font-medium text-white shadow-md hover:shadow-xl hover:bg-white  hover:text-secondary  transition duration-300 ease-linear mr-6">Talk to us!</a>
          <a href="#quiz" class="px-6 py-2  rounded-xl text-white font-medium border-white border hover:shadow-xl hover:bg-white hover:text-secondary transition duration-300 ease-linear">Find out now!</a>
        </div>
      </div>
    </div>
  </div>


  @yield('content')


  <footer class="mt-32 bg-primary w-full">
    <div class="w-full lg:w-8/12  px-4 lg:px-0 py-4 text-white mx-auto ">
      <ul class="text-sm align-center space-x-2 flex flex-row sm:justify-between">
        <div class="flex space-x-2">

          <div class="sm:flex sm:space-x-2">
            <li>
              <a href="{{ route('home') }}" class="text-sm sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out uppercase">Home</a>
            </li>
            <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
            <li>
              <a href="#" class="text-sm sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out uppercase">Section Two</a>
            </li>
            <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
          </div>
          <div class="sm:flex sm:space-x-2">
            <li>
              <a href="#" class="text-sm sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out uppercase">Three</a>
            </li>
            <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
            <li>
              <a href="#" class="text-sm sm:text-base py-3 hover:text-secondary  focus:outline-none focus:text-secondary transition duration-300 ease-out uppercase">Something</a>  
            </li>
          </div>
        </div>
          
        <div class="sm:flex sm:space-x-2 align-center">
          <li>
            <a href="{{ route('dashboard') }}" class="text-sm sm:text-base py-3 hover:text-secondary  focus:outline-none focus:text-secondary transition duration-300 ease-out uppercase">Dashboard</a>  
          </li>
          <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
          <li>
            <a href="https://goglichidze.me" target="_blank" rel="nofollow noreferrer" class="text-sm sm:text-base py-3 hover:text-secondary  focus:outline-none focus:text-secondary transition duration-300 ease-out">&copy; Mikael</a>  
          </li>
        </div>
      </ul>
        
    </div>
  </footer>
</body>
</html>

<style>
.hero{
  background-image: url(/image/home/hero-bg.jpg);
  background-size: auto 100%
  /* background: linear-gradient(89.68deg, #FFFFFF -1.23%, #FEA018 -1.22%, #FFA216 99.7%); */
}
</style>