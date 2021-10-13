<section class="text-gray-600 body-font">
  <div class="container py-20 mx-auto">
    <h2 class="mb-8 text-center text-head-color font-bold text-4xl">Videos</h2>

    <div class="flex flex-wrap -m-4">
      <vedio-modal></vedio-modal>
      <div class="p-4 md:w-1/3">
        <div class="shadow-lg rounded-lg overflow-hidden">
          <div class="relative">
            <a href="">
              <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('images/vedios/v2.jpg') }}"
                alt="blog">
              <img
                class="absolute h-16 object-cover w-16 z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 animate__animated animate__pulse animate__infinite animate__slow"
                src="{{ asset('images/icons/play.png') }}" alt="paly">
            </a>
          </div>
          <div class="px-4 py-2">
            <h2 class="text-center text-2xl font-medium text-gray-900 mb-3">Doctors videos</h2>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="shadow-lg rounded-lg overflow-hidden">
          <div class="relative">
            <a href="">
              <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('images/vedios/v3.jpg') }}"
                alt="blog">
              <img
                class="absolute h-16 object-cover w-16 z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 animate__animated animate__pulse animate__infinite animate__slow"
                src="{{ asset('images/icons/play.png') }}" alt="paly">
            </a>
          </div>
          <div class="px-4 py-2">
            <h2 class="text-center text-2xl font-medium text-gray-900 mb-3">How to use video</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
