/*
|--------------------------------------------------------------------------
| Nav menu
|--------------------------------------------------------------------------
*/
const html = document.getElementsByTagName("html")[0];
const body = document.getElementById("body");
const bodyDir = body.getAttribute("dir");
const mobileMenuToggale = document.querySelector("#mobileMenuToggale");
const mobileMenu = document.querySelector("#mobileMenu");
const app = document.getElementById("app");
const openMenu = document.getElementById("openMenu");
const closeMenu = document.getElementById("closeMenu");

//
mobileMenuToggale.addEventListener("click", e => {
  if (mobileMenu.classList.contains("hidden")) {
    mobileMenu.classList.remove("hidden");
    body.classList.add("mobileBody");
    html.setAttribute("class", "mobileBody");
    bodyDir === "rtl"
      ? (app.style.left = "-15rem")
      : (app.style.left = "15rem");
    openMenu.classList.add("hidden");
    closeMenu.classList.remove("hidden");
  } else {
    mobileMenu.classList.add("hidden");
    body.classList.remove("mobileBody");
    html.classList.remove("mobileBody");
    bodyDir === "rtl" ? (app.style.left = "0") : (app.style.left = "0");
    openMenu.classList.remove("hidden");
    closeMenu.classList.add("hidden");
  }
});

/*
|--------------------------------------------------------------------------
| Main Slider
|--------------------------------------------------------------------------
*/
new Splide("#vedioSlider", {
  type: "loop",
  arrows: false,
  autoplay: false,
  interval: 4000
}).mount();
