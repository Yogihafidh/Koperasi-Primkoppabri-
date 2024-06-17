const editPegawai = document.querySelectorAll(".btn-update-data-nasabah");
const closeModalEditPegawai = document.querySelectorAll(".btn-close-pegawai");
const modalEditPegawai = document.querySelectorAll(".modal-edit-data-pegawai");

editPegawai.forEach((edit) => {
  edit.addEventListener("click", () => {
    modalEditPegawai.classList.remove("hidden");
  });
});

closeModalEditPegawai.forEach((close) => {
  close.addEventListener("click", () => {
    modalEditPegawai.classList.add("hidden");
  });
});
