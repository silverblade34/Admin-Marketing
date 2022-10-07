const modal = document.querySelector(".back-modal");
const closeModal = document.querySelector(".modal__close");
const editP=document.getElementById("prueba234");

closeModal.addEventListener("click", (e) => {
  e.preventDefault();
  modal.classList.remove("modal--show");
});

editP.addEventListener("click", (e)=>{
  e.preventDefault();
  alert(editP.getAttribute('id'));
})
