<template>
  <div class="avatar relative">
    <img class="w-full" :src="'/images/guides.jpg'" alt="guides" />
    <div
      v-if="noteMiddle"
      class="note-pain animate__animated animate__fadeIn absolute p-4 text-sm rounded-lg shadow-lg text-center bg-indigo-500 text-white"
    >
      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
      Lorem Ipsum has been the industry's standard dummy text ever
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
      class="liver-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="thigh-front-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="knee-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="leg-front-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="back-upper-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="back-lower-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="arm-back-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="hand-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="thigh-back-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="leg-back-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
    <a
      @click.prevent="noteMiddle = !noteMiddle"
      class="foot-pain absolute inline-flex rounded-full opacity-75 animate-ping"
    >
    </a>
  </div>
</template>

<script>
export default {
  data() {
    return {
      noteMiddle: false
    };
  }
};
</script>
