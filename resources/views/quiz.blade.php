@extends('layouts.home')

@section('content')

<div class="w-full bg-white py-40 min-h-screen" id="assesment">
    <img src="/image/home/assesment-logo.svg" alt="Beauty icon" class="mx-auto w-28 h-auto mb-8">
    <div class="q-0">
        <div class="w-97 md:w-8/12 mx-auto flex flex-col items-center space-y-8">
            <h3 class="text-2xl text-secondary tracking-wider text-center md:text-left">Take the assessment right now</h3>
            <p class="text-secondary text-center md:text-left">Last what are you waiting for text, the very last call to action goes here.</p>
            <a id="start" class="cursor-pointer diag-btn flex items-center text-secondary px-8 py-2 tracking-widest border border-secondary hover:shadow-xl relative">Start your diagnostic <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path id="icon" d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" fill="#25283d"/></svg></a>
        </div>
    </div>
    <div class="w-97 md:w-8/12 mx-auto flex flex-col items-center space-y-8">
        <form action="{{ route('quiz') }}" name="form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="q-1 flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">Tell us your name</h3>
                <label for="name" hidden></label>
                <input type="text" name="name" id="name" placeholder="Your Name" class="quiz-input" value="{{ old('name') }}" required>
                <a id="nextBtn-1" class="quiz-next">Next</a>
            </div>
            <div class="q-2 flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">What is your skin type?</h3>
                <label class="quiz-label">
                   <input id="q-2-1" name="questionTwo[]" type="checkbox" class="quiz-checkbox" value="Dry as the desert" {{ (is_array(old('questionTwo')) and in_array("Dry as the desert", old('questionTwo'))) ? ' checked' : '' }}><span class="ml-2">Dry as the desert</span>
                </label>
                <label class="quiz-label">
                   <input id="q-2-2" name="questionTwo[]" type="checkbox" class="quiz-checkbox" value="Oily, I’m shining on in life" {{ (is_array(old('questionTwo')) and in_array("Oily, I’m shining on in life", old('questionTwo'))) ? ' checked' : '' }}><span class="ml-2">Oily, I’m shining on in life</span>
                </label>
                <label class="quiz-label">
                    <input id="q-2-3" name="questionTwo[]" type="checkbox" class="quiz-checkbox" value="Combination, my skin likes to keep me guessing"  {{ (is_array(old('questionTwo')) and in_array("Combination, my skin likes to keep me guessing", old('questionTwo'))) ? ' checked' : '' }}><span class="ml-2">Combination, my skin likes to keep me guessing</span>
                </label>
                <label class="quiz-label">
                    <input id="q-2-4" name="questionTwo[]" type="checkbox" class="quiz-checkbox" value="Normal, it’s well behaved"  {{ (is_array(old('questionTwo')) and in_array("Normal, it’s well behaved", old('questionTwo'))) ? ' checked' : '' }}><span class="ml-2">Normal, it’s well behaved</span>
                </label> 
                <label class="quiz-label">
                    <input id="q-2-5" name="questionTwo[]" type="checkbox" class="quiz-checkbox" value="I have no idea what you are talking about?"  {{ (is_array(old('questionTwo')) and in_array("I have no idea what you are talking about?", old('questionTwo'))) ? ' checked' : '' }}><span class="ml-2">I have no idea what you are talking about?</span>
                </label>
                <a id="nextBtn-2" class="quiz-next">Next</a>
            </div>


            <div class="q-3 flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">Do you have sensitive skin?</h3>
                <label class="quiz-label">
                    <input id="q-3-1" name="questionThree" type="radio" class="quiz-checkbox text-primary " value="Yes! My skin usually freaks out when I try new products"  @if(old('geckoHatchling')) checked @endif><span class="ml-2">Yes! My skin usually freaks out when I try new products</span>
                </label>
                <label class="quiz-label">
                    <input id="q-3-2" name="questionThree" type="radio" class="quiz-checkbox bg-primary" value="Sometimes. It just depends on the product or other things going on in life" @if(old('geckoHatchling')) checked @endif><span class="ml-2">Sometimes.  It just depends on the product or other things going on in life</span>
                </label>
                <label class="quiz-label">
                    <input id="q-3-3" name="questionThree" type="radio" class="quiz-checkbox"value="No. My skin is usually quite happy :)"  @if(old('questionThree')) checked @endif><span class="ml-2">No. My skin is usually quite happy :)</span>
                </label>
                <a id="nextBtn-3" class="quiz-next">Next</a>
            </div>



            <div class="q-4 flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">What are your main skin concerns?</h3>
                <p class="text-secondary text-center">Please select 3</p>
                <label class="quiz-label">
                   <input id="q-4-1" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="Breakouts" {{ (is_array(old('questionFour')) and in_array("Breakouts", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">Breakouts</span>
                </label>
                <label class="quiz-label">
                   <input id="q-4-2" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="Textured skin" {{ (is_array(old('questionFour')) and in_array("Textured skin", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">Textured skin</span>
                </label>
                <label class="quiz-label">
                   <input id="q-4-3" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="Pigmentation" {{ (is_array(old('questionFour')) and in_array("Pigmentation", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">Pigmentation</span>
                </label>
                <label class="quiz-label">
                   <input id="q-4-4" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="Uneven skintone" {{ (is_array(old('questionFour')) and in_array("Uneven skintone", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">Uneven skintone</span>
                </label>
                <label class="quiz-label">
                   <input id="q-4-5" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="Fine lines & wrinkles" {{ (is_array(old('questionFour')) and in_array("Fine lines & wrinkles", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">Fine lines & wrinkles</span>
                </label>
                <label class="quiz-label">
                   <input id="q-4-6" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="Blemishes and scars" {{ (is_array(old('questionFour')) and in_array("Blemishes and scars", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">Blemishes and scars</span>
                </label>
                <label class="quiz-label">
                   <input id="q-4-7" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="Dull skin" {{ (is_array(old('questionFour')) and in_array("Dull skin", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">Dull skin</span>
                </label>
                <label class="quiz-label">
                   <input id="q-4-8" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="Visibly aging skin" {{ (is_array(old('questionFour')) and in_array("Visibly aging skin", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">Visibly aging skin</span>
                </label>
                <label class="quiz-label">
                   <input id="q-4-9" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="I’m pretty happy with my skin. I just want to keep it that way now" {{ (is_array(old('questionFour')) and in_array("I’m pretty happy with my skin. I just want to keep it that way now", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">I’m pretty happy with my skin. I just want to keep it that way now. </span>
                </label>
                <a id="nextBtn-4" class="quiz-next">Next</a>
            </div>




            <div class="q-final flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center mb-4">Upload your selfies</h3>
                <div class="flex flex-col">

                    <input type="file" accept="image/*" name="imageOne" id="imageOne" class="bg-white ring-2 ring-pink p-2 text-xs rounded-lg my-2 text-secondary flex   @error('image') border-red-500 @enderror " placeholder="First Selfie">
                    @error('imageOne')
                        <script>
                            $(".q-0").css({ display: "none" });
                            $(".q-final").css({ display: "flex" }).fadeIn("slow");
                        </script>
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <input type="file" accept="image/*" name="imageTwo" id="imageTwo" class="bg-white ring-2 ring-pink p-2 text-xs rounded-lg my-2 text-secondary flex   @error('image') border-red-500 @enderror " placeholder="First Selfie">
                    @error('imageTwo')
                        <script>
                            $(".q-0").css({ display: "none" });
                            $(".q-final").css({ display: "flex" }).fadeIn("slow");
                        </script>
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <input type="file" accept="image/*" name="imageThree" id="imageThree" class="bg-white ring-2 ring-pink p-2 text-xs rounded-lg my-2 text-secondary flex   @error('image') border-red-500 @enderror " placeholder="First Selfie">
                    @error('imageThree')
                        <script>
                            $(".q-0").css({ display: "none" });
                            $(".q-final").css({ display: "flex" }).fadeIn("slow");
                        </script>
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <button type="submit" class="quiz-next">Submit the assessment</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
<style>












/*  */
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