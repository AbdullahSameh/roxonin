require("./bootstrap");
import Vue from "vue";

//register component
Vue.component("AvatarPain", require("./components/AvatarPain.vue").default);

//initialize vue
const app = new Vue({
  el: "#app"
});
