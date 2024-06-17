// Sidebar Display
const linkSidebars = document.querySelectorAll(".sidebar-link");
linkSidebars.forEach((linkSidebar) => {
  const link = linkSidebar.querySelector(".link");

  link.addEventListener("click", function (e) {
    e.preventDefault();
    document
      .querySelector(".active-sidebar")
      .classList.remove("active-sidebar");

    linkSidebar.classList.add("active-sidebar");
  });
});
