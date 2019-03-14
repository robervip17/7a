function comprobar() {
  let nombre=document.getElementById('nombre').value;
  let apellido=document.getElementById('apellido').value;
  let usuario=document.getElementById('usuario').value;
  if(nombre.length==0){
    alert("El campo nombre está vacío");
  }
  if (apellido.length==0) {
    alert("El campo apellido esta vacío");
  }
  if (usuario.length==0) {
    alert("El campo usuario esta vacío");
  }
  else {
    alert("Todo bien");
  }
}
