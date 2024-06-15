"use strict";

// CRUD Display
const tbody = document.querySelector(".tbody");
const crudOptions = document.querySelector(".option-crud");
const crud = document.querySelector(".crud");
const cancel = document.querySelector(".cancel-btn");

tbody.addEventListener("click", (e) => {
  e.preventDefault();
  const el = e.target.closest(".option-crud");
  const crud = e.target.closest(".crud-btn").querySelector(".crud");
  const cancel = e.target
    .closest(".crud-btn")
    .querySelector(".crud")
    .querySelector(".cancel-btn");

  console.log(cancel);
  if (!el || !crud) return;

  crud.classList.remove("hidden");

  cancel.addEventListener("click", function (e) {
    e.preventDefault();
    crud.classList.add("hidden");
  });
});

// CRUD Navigasi Display in Tabel
const btnTimes = document.querySelectorAll(".btn-time");
btnTimes.forEach((btn) => {
  btn.addEventListener("click", () => {
    document
      .querySelector(".btn-time-active")
      .classList.remove("btn-time-active");

    btn.classList.add("btn-time-active");
  });
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
