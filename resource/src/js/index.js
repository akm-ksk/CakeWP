document.addEventListener("DOMContentLoaded", () => {
  {
    let topPage = false;
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
        speed: 1000,
      });
    }
  }

  {
    const header = document.querySelector("header");
    const humMenu = document.querySelector("#humMenu");
    humMenu.addEventListener("click", () => {
      header.classList.toggle("open");
    });
  }
});
