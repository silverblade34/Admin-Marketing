function confirmEliminarContact(e) {
    if (confirm("¿Estas seguro que deseas eliminar el contacto?")) {
      return true;
    } else {
      e.preventDefault();
    }
  }
  let btnEliminar = document.querySelectorAll(".btn-eliminar");
  for(var i=0;btnEliminar.length;i++){
      btnEliminar[i].addEventListener('click',confirmEliminarContact);
  }
  