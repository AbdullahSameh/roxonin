require("./bootstrap");
import Vue from "vue";

//register component
Vue.component("AvatarPain", require("./components/AvatarPain.vue").default);
Vue.component("VedioModal", require("./components/VedioModal.vue").default);

//initialize vue
const app = new Vue({
  el: "#app"
});
