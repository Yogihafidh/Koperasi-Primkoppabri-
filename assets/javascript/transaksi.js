"use strict";
// CRUD Display
const tbody = document.querySelector(".tbody");
const crudOptions = document.querySelector(".option-crud");
const crud = document.querySelector(".crud");
const cancel = document.querySelector(".cancel-btn");

const btnMobile = document.querySelector(".btn-mobile-nav");
const btnClose = document.querySelector(".btn-close");
const rightBoxNav = document.querySelector(".right-box-nav");

btnMobile.addEventListener("click", () => {
  rightBoxNav.style.display = "flex";
});

btnClose.addEventListener("click", () => {
  rightBoxNav.style.display = "none";
});

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

// CRUD Navigasi Display
const btnTimes = document.querySelectorAll(".btn-time");
btnTimes.forEach((btn) => {
  btn.addEventListener("click", () => {
    document
      .querySelector(".btn-time-active")
      .classList.remove("btn-time-active");

    btn.classList.add("btn-time-active");
  });
});
