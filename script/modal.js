const modal = document.querySelector(".modal");
const closeModal = document.querySelector(".modal__close");

closeModal.addEventListener("click", (e) => {
  e.preventDefault();
  modal.classList.remove("modal--show");
});
