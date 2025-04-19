const kartu = document.querySelector(".kartu__inner");

kartu.addEventListener("click", function (e) {
  kartu.classList.toggle('is-flipped');
});