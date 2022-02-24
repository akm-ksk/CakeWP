"use strict";

document.addEventListener("DOMContentLoaded", function () {
  {
    var topPage = false;

    try {
      topPage = document.querySelector("#top");
    } catch (e) {
      topPage = false;
    }

    if (topPage) {
      $("#mvSlider").slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        speed: 1000
      });
    }
  }
  {
    var header = document.querySelector("header");
    var humMenu = document.querySelector("#humMenu");
    humMenu.addEventListener("click", function () {
      header.classList.toggle("open");
    });
  }
});