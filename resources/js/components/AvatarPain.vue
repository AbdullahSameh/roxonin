<template>
  <div>
    <div class="relative flex items-center justify-center">
      <img
        class="animate__animated animate__flipInX animate__slow object-cover object-center w-full"
        :src="'images/slider/banner.png'"
        alt="roxonin-banner"
      />

      <h1
        class="animate__animated animate__bounceInUp animate__slow animate__delay-s absolute text-5xl text-head-color text-center font-bold"
      >
        Main visual and slogan
      </h1>

      <ul
        class="tabs-choose px-60 absolute bottom-0 w-full flex items-center justify-around border-b-2 border-solid border-logo-color"
      >
        <li
          @click="activeTab = '1'"
          :class="[activeTab === '1' ? 'active' : '']"
          class="py-4 px-20 w-full text-center bg-bod-color rounded-t-lg mx-2 border-2 border-solid border-logo-color -mb-1"
        >
          Know your pain
        </li>
        <li
          @click="activeTab = '2'"
          :class="[activeTab === '2' ? 'active' : '']"
          class="py-4 px-20 w-full text-center bg-bod-color rounded-t-lg mx-2 border-2 border-solid border-logo-color -mb-1"
        >
          About Roxonin
        </li>
        <li
          @click="activeTab = '3'"
          :class="[activeTab === '3' ? 'active' : '']"
          class="py-4 px-20 w-full text-center bg-bod-color rounded-t-lg mx-2 border-2 border-solid border-logo-color -mb-1"
        >
          Why Roxonin Tape?
        </li>
      </ul>
    </div>
    <div class="tabs-content container py-12 md:py-20 mx-auto bg-bod-color">
      <div class="tabs-content">
        <div v-if="activeTab === '1'" class="tab-one">
          <div class="avatar">
            <div class="flex flex-wrap">
              <div class=" md:w-1/2 flex flex-col items-center justify-center">
                <h2
                  class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4"
                >
                  Roof party normcore before they sold out, cornhole vape
                </h2>
                <p class="leading-relaxed mb-8">
                  Live-edge letterpress cliche, salvia fanny pack humblebrag
                  narwhal portland. VHS man braid palo santo hoodie brunch trust
                  fund. Bitters hashtag waistcoat fashion axe chia unicorn.
                  Plaid fixie chambray 90's, slow-carb etsy tumeric. Cray pug
                  you probably haven't heard of them hexagon kickstarter craft
                  beer pork chic.
                </p>
              </div>
              <div class=" md:w-1/2 flex flex-col items-center justify-center">
                <div class="avatar-guides relative">
                  <img
                    class="w-full object-cover object-center"
                    :src="'/images/guides.png'"
                    alt="guides"
                  />
                  <div
                    v-if="noteMiddle"
                    class="note-pain animate__animated animate__fadeIn absolute p-4 text-sm rounded-lg shadow-lg text-center bg-indigo-500 text-white"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever
                  </div>

                  <a
                    @click.prevent="noteMiddle = !noteMiddle"
                    class="neck-pain absolute inline-flex rounded-full opacity-75 animate-ping"
                  >
                  </a>
                  <a
                    @click.prevent="noteMiddle = !noteMiddle"
                    class="shoulder-pain absolute inline-flex rounded-full opacity-75 animate-ping"
                  >
                  </a>
                  <a
                    @click.prevent="noteMiddle = !noteMiddle"
                    class="arm-front-pain absolute inline-flex rounded-full opacity-75 animate-ping"
                  >
                  </a>
                  <a
                    @click.prevent="noteMiddle = !noteMiddle"
                    class="stomach-pain absolute inline-flex rounded-full opacity-75 animate-ping"
                  >
                  </a>
                  <a
                    @click.prevent="noteMiddle = !noteMiddle"
                    class="knee-pain absolute inline-flex rounded-full opacity-75 animate-ping"
                  >
                  </a>

                  <!-- <a
          @click.prevent="noteMiddle = !noteMiddle"
          class="thigh-front-pain absolute inline-flex rounded-full opacity-75 animate-ping"
        >
        </a> -->
                  <!-- <a
          @click.prevent="noteMiddle = !noteMiddle"
          class="leg-front-pain absolute inline-flex rounded-full opacity-75 animate-ping"
        >
        </a> -->
                  <!-- <a
          @click.prevent="noteMiddle = !noteMiddle"
          class="back-upper-pain absolute inline-flex rounded-full opacity-75 animate-ping"
        >
        </a> -->
                  <!-- <a
          @click.prevent="noteMiddle = !noteMiddle"
          class="back-lower-pain absolute inline-flex rounded-full opacity-75 animate-ping"
        >
        </a> -->
                  <!-- <a
          @click.prevent="noteMiddle = !noteMiddle"
          class="arm-back-pain absolute inline-flex rounded-full opacity-75 animate-ping"
        >
        </a> -->
                  <!-- <a
          @click.prevent="noteMiddle = !noteMiddle"
          class="hand-pain absolute inline-flex rounded-full opacity-75 animate-ping"
        >
        </a> -->
                  <!-- <a
          @click.prevent="noteMiddle = !noteMiddle"
          class="thigh-back-pain absolute inline-flex rounded-full opacity-75 animate-ping"
        >
        </a> -->
                  <!-- <a
          @click.prevent="noteMiddle = !noteMiddle"
          class="leg-back-pain absolute inline-flex rounded-full opacity-75 animate-ping"
        >
        </a> -->
                  <!-- <a
          @click.prevent="noteMiddle = !noteMiddle"
          class="foot-pain absolute inline-flex rounded-full opacity-75 animate-ping"
        >
        </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div v-if="activeTab === '2'" class="tab-two">
          <div class="flex items-center justify-center flex-col">
            <img
              class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded"
              alt="hero"
              src="https://dummyimage.com/720x600"
            />
            <div class="text-center lg:w-2/3 w-full">
              <h1
                class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"
              >
                Microdosing synth tattooed vexillologist
              </h1>
              <p class="mb-8 leading-relaxed">
                Meggings kinfolk echo park stumptown DIY, kale chips beard
                jianbing tousled. Chambray dreamcatcher trust fund, kitsch vice
                godard disrupt ramps hexagon mustache umami snackwave tilde
                chillwave ugh. Pour-over meditation PBR&amp;B pickled ennui
                celiac mlkshk freegan photo booth af fingerstache pitchfork.
              </p>
              <div class="flex justify-center">
                <button
                  class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                >
                  Button
                </button>
                <button
                  class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg"
                >
                  Button
                </button>
              </div>
            </div>
          </div>
        </div>
        <div v-if="activeTab === '3'" class="tab-three">
          <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="inline-block w-8 h-8 text-gray-400 mb-8"
              viewBox="0 0 975.036 975.036"
            >
              <path
                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"
              ></path>
            </svg>
            <p class="leading-relaxed text-lg">
              Edison bulb retro cloud bread echo park, helvetica stumptown
              taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee
              ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut
              adaptogen squid fanny pack vaporware. Man bun next level coloring
              book skateboard four loko knausgaard. Kitsch keffiyeh master
              cleanse direct trade indigo juice before they sold out gentrify
              plaid gastropub normcore XOXO 90's pickled cindigo jean shorts.
              Slow-carb next level shoindigoitch ethical authentic, yr scenester
              sriracha forage franzen organic drinking vinegar.
            </p>
            <span
              class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"
            ></span>
            <h2
              class="text-gray-900 font-medium title-font tracking-wider text-sm"
            >
              HOLDEN CAULFIELD
            </h2>
            <p class="text-gray-500">Senior Product Designer</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      activeTab: "1",
      noteMiddle: false
    };
  }
};
</script>
