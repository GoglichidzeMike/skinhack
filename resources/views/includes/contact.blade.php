<div class="w-full py-32 bg-third" id="contact">
  <h3 class="text-2xl text-secondary tracking-wider text-center mb-6">Get in touch!</h3>
  <p class="text-secondary text-center">You can reach us anytime you want!</p>
  <p class="text-secondary text-center mb-6">And we are always happy to chat!</p>
  <div>
    <div class="social w-97 mx-auto flex justify-center flex-wrap mb-4">
      <a href="https://www.facebook.com/Skinhack-100446905597051" target="_blank" rel="nofollow noopener">
        <div class="contact-card m-2">
          <div class="mb-4 bg-white p-2 rounded-full">
            <img src="/image/contact/facebook.svg" alt="facebook icon" class="w-10 h-10">
          </div>
          <p class=" text-sm text-center">Skinhack</p>
        </div>
      </a>
      <a href="https://www.instagram.com/skinhack.ae/" target="_blank" rel="nofollow noopener">
        <div class="contact-card m-2">
          <div class="mb-4 bg-white p-2 rounded-full">
            <img src="/image/contact/instagram.svg" alt="Insagram icon" class="w-10 h-10">
          </div>
          <p class=" text-sm text-center">@skinhack.ae</p>
        </div>
      </a>
      <a href="mailto:hello@skinhack.ae" target="_blank" rel="nofollow noopener">
        <div class="contact-card m-2">
          <div class="mb-4 bg-white p-2 rounded-full">
            <img src="/image/contact/mail.svg" alt="Mail icon" class="w-10 h-10">
          </div>
          <p class=" text-sm text-center">hello@skinhack.ae</p>
        </div>
      </a>
      <a href="https://web.whatsapp.com/send?phone=447449339157&text=Hi%2C%20I%27m%20Interested%20in%20your%20services"  target="_blank" rel="nofollow noopener">
        <div class="contact-card m-2">
          <div class="mb-4 bg-white p-2 rounded-full">
            <img src="/image/contact/WhatsApp.svg" alt="WhatsApp icon" class="w-10 h-10">
          </div>
          <p class=" text-sm text-center">WhatsApp us!</p>
        </div>
      </a>
    </div>

    <div class="bg-white w-97 lg:w-3/5 xl:w-2/5 mx-auto p-4 rounded-xl shadow-lg">
    <h2 class=" text-secondary tracking-wider mb-6">Contact form<h2>
      <form action="{{ route('contact') }}" method="post" enctype="multipart/form-data" class="w-full md:flex justify-between">
        @csrf
        <div class="w-full  mx-auto md:mx-0 md:mr-4">
          <label for="name" class="text-secondary block  mb-1">Name</label>
          <input type="text" name="name" id="name" autocomplete="off" placeholder="Your name here" required class="input" value="{{ old('name') }}" @error('name') border-red-500 @enderror>
          <label for="email" class="text-secondary block  mb-1">Email</label>
          <input type="email" name="email" id="email" autocomplete="off" placeholder="Your e-mail here" required class="input" value="{{ old('email') }}"  @error('email') border-red-500 @enderror>
          <label for="phone" class="text-secondary block  mb-1">Phone</label>
          <input type="text" name="phone" id="phone" autocomplete="off" placeholder="Your phone number here (optional)" class="input" value="{{ old('phone') }}" @error('phone') border-red-500 @enderror>
        </div>
        <div class="w-full mx-auto md:mx-0">
          <label for="message" class="text-secondary block  mb-1">Message</label>
          <textarea name="message" id="message" rows="6" class="input" value="{{ old('message') }}" required @error('message') border-red-500 @enderror></textarea>
          <button type="submit" class="tracking-widest px-8 py-2 text-xs bg-pink  text-white rounded-lg hover:bg-secondary transition-colors duration-300 ease-in-out">Send</button>
        </div>
      </form>
      @if (session('message'))
        <div class="text-center animate-pulse text-secondary font-medium my-4">
            {{ session('message') }} 
        </div>
      @endif
    </div>
  </div>
    
</div>