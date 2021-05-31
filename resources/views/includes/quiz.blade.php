<div class="w-full bg-white py-40 min-h-screen flex flex-col items-center justify-center">
    <img src="/image/home/assesment-logo.svg" alt="Beauty icon" class="mx-auto w-28 h-auto mb-8">

    @if (session('status'))
        <div class="z-50 overlay fixed w-screen h-screen bg-gray-500 bg-opacity-50 top-0 right-0">
            <div class="modal bg-pink rounded-xl shadow-lg fixed top-1/2 left-1/2 transform -translate-x-2/4 -translate-y-2/4  h-1/2 w-97 sm:w-1/2 text-center text-secondary font-medium my-4 flex justify-center items-center z-50">
                <img src="/image/close.svg" class="close absolute right-5 top-5 h-5 w-5 cursor-pointer" alt="close icon">
                <p class="text-lg text-white ">Your diagnostics was sucesfully submited! <br> We will get back to you shortly!</p>
            </div>
        </div>
    @endif
    <div class="q-0">
        <div class="w-97 md:w-8/12 mx-auto flex flex-col items-center space-y-8">
            <h3 class="text-2xl text-secondary tracking-wider text-center">Try the skin analysis test now</h3>
            <p class="text-secondary text-center">It's free, takes 5 minutes and will get you professional advice that your skin will love.</p>
            <a id="start" class="cursor-pointer diag-btn flex items-center text-secondary px-8 py-2 tracking-widest border border-secondary hover:shadow-xl relative">Yes, let's do it! <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path id="icon" d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" fill="#25283d"/></svg></a>
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
                   <input id="q-2-2" name="questionTwo[]" type="checkbox" class="quiz-checkbox" value="Oily, I'm shining on in life" {{ (is_array(old('questionTwo')) and in_array("Oily, I'm shining on in life", old('questionTwo'))) ? ' checked' : '' }}><span class="ml-2">Oily, I'm shining on in life</span>
                </label>
                <label class="quiz-label">
                    <input id="q-2-3" name="questionTwo[]" type="checkbox" class="quiz-checkbox" value="Combination, my skin likes to keep me guessing"  {{ (is_array(old('questionTwo')) and in_array("Combination, my skin likes to keep me guessing", old('questionTwo'))) ? ' checked' : '' }}><span class="ml-2">Combination, my skin likes to keep me guessing</span>
                </label>
                <label class="quiz-label">
                    <input id="q-2-4" name="questionTwo[]" type="checkbox" class="quiz-checkbox" value="Normal, it's well behaved"  {{ (is_array(old('questionTwo')) and in_array("Normal, it's well behaved", old('questionTwo'))) ? ' checked' : '' }}><span class="ml-2">Normal, it's well behaved</span>
                </label> 
                <label class="quiz-label">
                    <input id="q-2-5" name="questionTwo[]" type="checkbox" class="quiz-checkbox" value="I have no idea what you are talking about?"  {{ (is_array(old('questionTwo')) and in_array("I have no idea what you are talking about?", old('questionTwo'))) ? ' checked' : '' }}><span class="ml-2">I have no idea what you are talking about?</span>
                </label>
                <a id="nextBtn-2" class="quiz-next">Next</a>
            </div>


            <div class="q-3 flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">Do you have sensitive skin?</h3>
                <label class="quiz-label">
                    <input id="q-3-1" name="questionThree" type="radio" class="quiz-checkbox text-primary " value="Yes! My skin usually freaks out when I try new products"  @if(old('questionThree')) checked @endif><span class="ml-2">Yes! My skin usually freaks out when I try new products</span>
                </label>
                <label class="quiz-label">
                    <input id="q-3-2" name="questionThree" type="radio" class="quiz-checkbox bg-primary" value="Sometimes. It just depends on the product or other things going on in life" @if(old('questionThree')) checked @endif><span class="ml-2">Sometimes.  It just depends on the product or other things going on in life</span>
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
                   <input id="q-4-9" name="questionFour[]" type="checkbox" class="max-3 quiz-checkbox" value="I'm pretty happy with my skin. I just want to keep it that way now" {{ (is_array(old('questionFour')) and in_array("I'm pretty happy with my skin. I just want to keep it that way now", old('questionFour'))) ? ' checked' : '' }}><span class="ml-2">I'm pretty happy with my skin. I just want to keep it that way now. </span>
                </label>
                <a id="nextBtn-4" class="quiz-next">Next</a>
            </div>



            <div class="q-5 flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">Do you have any concerns about your eye area?</h3>
                <p class="text-secondary text-center">Select all which apply</p>

                <label class="quiz-label">
                   <input id="q-5-1" name="questionFive[]" type="checkbox" class="quiz-checkbox" value="Fine lines" {{ (is_array(old('questionFive')) and in_array("Fine lines", old('questionFive'))) ? ' checked' : '' }}><span class="ml-2">Fine lines<span>
                </label>
                <label class="quiz-label">
                   <input id="q-5-2" name="questionFive[]" type="checkbox" class="quiz-checkbox" value="Dark circles " {{ (is_array(old('questionFive')) and in_array("Dark circles ", old('questionFive'))) ? ' checked' : '' }}><span class="ml-2">Dark circles <span>
                </label>
                <label class="quiz-label">
                   <input id="q-5-3" name="questionFive[]" type="checkbox" class="quiz-checkbox" value="Bags under my eyes" {{ (is_array(old('questionFive')) and in_array("Bags under my eyes", old('questionFive'))) ? ' checked' : '' }}><span class="ml-2">Bags under my eyes<span>
                </label>
                <label class="quiz-label">
                   <input id="q-5-4" name="questionFive[]" type="checkbox" class="quiz-checkbox" value="Dryness" {{ (is_array(old('questionFive')) and in_array("Dryness", old('questionFive'))) ? ' checked' : '' }}><span class="ml-2">Dryness<span>
                </label>
                <label class="quiz-label">
                   <input id="q-5-5" name="questionFive[]" type="checkbox" class="quiz-checkbox" value="I'm quite happy and I want to keep it this way." {{ (is_array(old('questionFive')) and in_array("I'm quite happy and I want to keep it this way.", old('questionFive'))) ? ' checked' : '' }}><span class="ml-2">I'm quite happy and I want to keep it this way.<span>
                </label>
                
                <a id="nextBtn-5" class="quiz-next">Next</a>
            </div>




            <div class="q-6 flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">What has been your experience with skincare so far?</h3>
                <label class="quiz-label">
                    <input id="q-6-1" name="questionSix" type="radio" class="quiz-checkbox text-primary " value="Ehm, I just wash my face?"  @if(old('questionSix')) checked @endif><span class="ml-2">Ehm, I just wash my face?</span>
                </label>
                <label class="quiz-label">
                    <input id="q-6-2" name="questionSix" type="radio" class="quiz-checkbox text-primary " value="I just do the basics like cleansing & moisturizing and an occasional product I just try"  @if(old('questionSix')) checked @endif><span class="ml-2">I just do the basics like cleansing & moisturizing and an occasional product I just try</span>
                </label>
                <label class="quiz-label">
                    <input id="q-6-3" name="questionSix" type="radio" class="quiz-checkbox text-primary " value="I'm currently experimenting with new products and routines"  @if(old('questionSix')) checked @endif><span class="ml-2">I'm currently experimenting with new products and routines</span>
                </label>
                <label class="quiz-label">
                    <input id="q-6-4" name="questionSix" type="radio" class="quiz-checkbox text-primary " value="I have my favorite products and a routine in place and have come to know my skin well"  @if(old('questionSix')) checked @endif><span class="ml-2">I have my favorite products and a routine in place and have come to know my skin well</span>
                </label>
                <label class="quiz-label">
                    <input id="q-6-5" name="questionSix" type="radio" class="quiz-checkbox text-primary " value="I'm an expert. I understand the lingo and I know exactly how to choose the right products for me"  @if(old('questionSix')) checked @endif><span class="ml-2">I'm an expert. I understand the lingo and I know exactly how to choose the right products for me</span>
                </label>
                <a id="nextBtn-6" class="quiz-next">Next</a>
            </div>


            <div class="q-7 flex-col hidden text-sm">
                <h3 class="text-xl text-secondary tracking-wider text-center">What can we help you with?</h3>
                <label class="quiz-label">
                    <input id="q-7-1" name="questionSeven" type="radio" class="quiz-checkbox text-primary" value="I'm new to this all and I need help!"  @if(old('questionSeven')) checked @endif><span class="ml-2">I'm new to this all and I need help!</span>
                </label>
                <label class="quiz-label">
                    <input id="q-7-2" name="questionSeven" type="radio" class="quiz-checkbox text-primary" value="I have a basic routine but I'm not sure it's doing anything?"  @if(old('questionSeven')) checked @endif><span class="ml-2">I have a basic routine but I'm not sure it's doing anything?</span>
                </label>
                <label class="quiz-label">
                    <input id="q-7-3" name="questionSeven" type="radio" class="quiz-checkbox text-primary" value="I've been trying out products but I've been disappointed!"  @if(old('questionSeven')) checked @endif><span class="ml-2">I've been trying out products but I've been disappointed!</span>
                </label>
                <label class="quiz-label">
                    <input id="q-7-4" name="questionSeven" type="radio" class="quiz-checkbox text-primary" value="I have specific skin concerns I want help with"  @if(old('questionSeven')) checked @endif><span class="ml-2">I have specific skin concerns I want help with</span>
                </label>
                <label class="quiz-label">
                    <input id="q-7-5" name="questionSeven" type="radio" class="quiz-checkbox text-primary" value="I'm a pro and I just want to see if there's something I'm overlooking"  @if(old('questionSeven')) checked @endif><span class="ml-2">I'm a pro and I just want to see if there's something I'm overlooking</span>
                </label>
                <a id="nextBtn-7" class="quiz-next">Next</a>
            </div>


            <div class="q-8 flex-col hidden text-sm">
                <h3 class="text-xl text-secondary tracking-wider text-center">How much time do you have to spend on a skincare routine?</h3>
                <label class="quiz-label">
                    <input id="q-8-1" name="questionEight" type="radio" class="quiz-checkbox text-primary" value="Under 10 mins a day"  @if(old('questionEight')) checked @endif><span class="ml-2">Under 10 mins a day</span>
                </label>
                <label class="quiz-label">
                    <input id="q-8-2" name="questionEight" type="radio" class="quiz-checkbox text-primary" value="10-20 min a day"  @if(old('questionEight')) checked @endif><span class="ml-2">10-20 min a day</span>
                </label>
                <label class="quiz-label">
                    <input id="q-8-3" name="questionEight" type="radio" class="quiz-checkbox text-primary" value="20 - 30 minutes a day"  @if(old('questionEight')) checked @endif><span class="ml-2">20 - 30 minutes a day</span>
                </label>
                <label class="quiz-label">
                    <input id="q-8-4" name="questionEight" type="radio" class="quiz-checkbox text-primary" value="Whatever time it takes to get that glow!"  @if(old('questionEight')) checked @endif><span class="ml-2">Whatever time it takes to get that glow!</span>
                </label>
                <a id="nextBtn-8" class="quiz-next">Next</a>
            </div>




            <div class="q-9 flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">What do you currently use?</h3>
                <p class="text-secondary text-center">Select all which apply</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-1">
                    
                    <label class="quiz-label">
                    <input id="q-9-1" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Cleanser" {{ (is_array(old('questionNine')) and in_array("Cleanser", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Cleanser<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-2" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Toner" {{ (is_array(old('questionNine')) and in_array("Toner", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Toner<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-3" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Essence" {{ (is_array(old('questionNine')) and in_array("Essence", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Essence<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-4" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Moisturizer" {{ (is_array(old('questionNine')) and in_array("Moisturizer", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Moisturizer<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-5" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Serum(s)" {{ (is_array(old('questionNine')) and in_array("Serum(s)", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Serum(s)<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-6" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Exfoliation product" {{ (is_array(old('questionNine')) and in_array("Exfoliation product", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Exfoliation product<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-7" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Masks" {{ (is_array(old('questionNine')) and in_array("Masks", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Masks<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-8" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Facial Oil" {{ (is_array(old('questionNine')) and in_array("Facial Oil", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Facial Oil<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-9" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Eye cream" {{ (is_array(old('questionNine')) and in_array("Eye cream", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Eye cream<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-10" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Eye serum" {{ (is_array(old('questionNine')) and in_array("Eye serum", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Eye serum<span>
                    </label>
                    <label class="quiz-label">
                    <input id="q-9-11" name="questionNine[]" type="checkbox" class="quiz-checkbox" value="Sunscreen" {{ (is_array(old('questionNine')) and in_array("Sunscreen", old('questionNine'))) ? ' checked' : '' }}><span class="ml-2">Sunscreen<span>
                    </label>
                
                </div>
                <a id="nextBtn-9" class="quiz-next">Next</a>
            </div>


 


            <div class="q-10 flex-col hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">What is your monthly budget on skincare?</h3>
                <div class="grid grid-cols-2 gap-1">

                    <label class="quiz-label">
                        <input id="q-10-1" name="questionTen" type="radio" class="quiz-checkbox text-primary" value="0 - 100 dhs"  @if(old('questionTen')) checked @endif><span class="ml-2">0 - 100 dhs</span>
                    </label>
                    <label class="quiz-label">
                        <input id="q-10-2" name="questionTen" type="radio" class="quiz-checkbox text-primary" value="100 - 200 dhs"  @if(old('questionTen')) checked @endif><span class="ml-2">100 - 200 dhs</span>
                    </label>
                    <label class="quiz-label">
                        <input id="q-10-3" name="questionTen" type="radio" class="quiz-checkbox text-primary" value="200 - 300 dhs"  @if(old('questionTen')) checked @endif><span class="ml-2">200 - 300 dhs</span>
                    </label>
                    <label class="quiz-label">
                        <input id="q-10-4" name="questionTen" type="radio" class="quiz-checkbox text-primary" value="300 - 400 dhs"  @if(old('questionTen')) checked @endif><span class="ml-2">300 - 400 dhs</span>
                    </label>
                    <label class="quiz-label">
                        <input id="q-10-5" name="questionTen" type="radio" class="quiz-checkbox text-primary" value="400 + dhs"  @if(old('questionTen')) checked @endif><span class="ml-2">400 + dhs</span>
                    </label>
                </div>
                <a id="nextBtn-10" class="quiz-next">Next</a>
            </div>


            <div class="q-11 flex-col text-sm w-97 md:w-1/2 mx-auto hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center">What is your gender?</h3>
                <div class="grid grid-cols-2 gap-1 mb-6">
                    <label class="quiz-label">
                        <input id="q-11-1" name="questionEleven" type="radio" class="quiz-checkbox text-primary" value="Female"  @if(old('questionEleven')) checked @endif><span class="ml-2">Female</span>
                    </label>
                    <label class="quiz-label">
                        <input id="q-11-2" name="questionEleven" type="radio" class="quiz-checkbox text-primary" value="Male"  @if(old('questionEleven')) checked @endif><span class="ml-2">Male</span>
                    </label>
                </div>

                <h3 class="text-xl text-secondary tracking-wider text-center">How young are you?</h3>
               
                <label for="age" hidden></label>
                <input type="text" name="age" id="age" placeholder="Your Age" class="quiz-input mb-6" value="{{ old('age') }}" required>

                <h3 class="text-xl text-secondary tracking-wider text-center">Is there anything else you would like us to know?</h3>
                <p class="text-secondary text-center text-sm">Please mention if you have any health conditions, are taking medication, have had procedures done recently, if you are currently taking Isotretinoin or have done so in the past 6 months</p>
                
                <label for="questionExtra" hidden></label>
                <textarea type="text" rows="4" name="questionExtra" id="questionExtra" placeholder="Extra info" class="quiz-input" required>{{{ old('questionExtra') }}}</textarea>

                <a id="nextBtn-11" class="quiz-next">Next</a>
            </div>




            {{-- IMAGES UPLOAD FINAL DIV --}}
            <div class="q-final flex-col w-97 md:w-1/2 mx-auto hidden">
                <h3 class="text-xl text-secondary tracking-wider text-center mb-4">Great, we got what we need! Onto picture time!</h3>
                <p class="text-sm text-center text-seonndary mb-4">
                    Please upload 3 pictures showing your face from the front, from the right side and from the left side. 
                </p>
                <p class="text-sm text-center text-seonndary mb-4">
                    Please make sure you are bare faced, the picture quality is clear and it is taken in natural day light. 
                </p>
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


                    <h3 class="text-gl text-secondary tracking-wider text-center mt-6">Please provide your email address <br> Our experts will review all your info and email you your skin analysis results within 24 hours!</h3>
                    <label for="email" hidden></label>
                    <input type="email" name="email" id="email" placeholder="Your Email" class="quiz-input mb-6" value="{{ old('email') }}" required>

                    <button type="submit" class="quiz-next">Submit the assessment</button>
                </div>
            </div>
        </form>
    </div>
</div>



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