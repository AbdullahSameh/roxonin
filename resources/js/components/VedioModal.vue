<template>
  <div class="p-4 md:w-1/3">
    <div class="h-full shadow-lg rounded-lg overflow-hidden">
      <div class="relative">
        <a @click.prevent="openModal('mymodalcentered')" class="cursor-pointer">
          <img
            class="lg:h-48 md:h-36 w-full object-cover object-center"
            :src="'images/vedios/v1.jpg'"
            alt="blog"
          />
          <img
            class="absolute h-16 object-cover w-16 z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 animate__animated animate__pulse animate__infinite animate__slow"
            :src="'images/icons/play.png'"
            alt="paly"
          />
        </a>
      </div>
      <div class="px-4 py-2">
        <h2 class="text-center text-2xl font-medium text-gray-900 mb-3">
          How to use video
        </h2>
      </div>
    </div>

    <dialog
      id="mymodalcentered"
      class="bg-transparent z-0 relative w-screen h-screen"
    >
      <div
        class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 transition-opacity duration-300 opacity-0"
      >
        <div class="bg-white flex rounded-lg w-3/5 relative">
          <div class="flex flex-col items-start w-full">
            <div class="p-4 flex items-center w-full">
              <div class="text-gray-900 font-bold text-lg">Vedio Modal</div>
              <svg
                @click="modalClose('mymodalcentered')"
                class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 18 18"
              >
                <path
                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
                />
              </svg>
            </div>

            <div
              class="px-7 overflow-x-hidden overflow-y-auto w-full"
              style="max-height: 70vh;"
            >
              <video controls width="100%" height="100%">
                <source src="/vedio/roxonin.mp4" type="video/mp4" />
              </video>
            </div>

            <div class="p-3 flex justify-end items-center w-full">
              <button
                type="button"
                @click="modalClose('mymodalcentered')"
                class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg shadow-lg border-0 r"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </dialog>
  </div>
</template>

<script>
export default {
  data() {
    return {
      vedio1: false
    };
  },
  methods: {
    openModal(key) {
      document.getElementById(key).showModal();
      document.body.setAttribute("style", "overflow: hidden;");
      document.getElementById(key).children[0].scrollTop = 0;
      document.getElementById(key).children[0].classList.remove("opacity-0");
      document.getElementById(key).children[0].classList.add("opacity-100");
    },
    modalClose(key) {
      document.getElementById(key).children[0].classList.remove("opacity-100");
      document.getElementById(key).children[0].classList.add("opacity-0");
      setTimeout(function() {
        document.getElementById(key).close();
        document.body.removeAttribute("style");
      }, 100);
    }
  }
};
</script>
