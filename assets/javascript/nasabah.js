const addNasabah = document.querySelector(".btn-add-nasabah");
const closeModalNasabah = document.querySelector(".btn-close-nasabah");
const modalNasabah = document.querySelector(".modal-tambah-data-nasabah");

addNasabah.addEventListener("click", () => {
  modalNasabah.classList.remove("hidden");
});

closeModalNasabah.addEventListener("click", () => {
  modalNasabah.classList.add("hidden");
});

// Navigation Mobile
const navigation = document.querySelector(".navigation");
const btnNavMobile = document.querySelector(".btn-mobile-nav");
const btnCloseNavMobile = document.querySelector(".btn-close-mobile-nav");

btnNavMobile.addEventListener("click", () => {
  navigation.classList.add("nav-open");
});

btnCloseNavMobile.addEventListener("click", () => {
  navigation.classList.remove("nav-open");
});
