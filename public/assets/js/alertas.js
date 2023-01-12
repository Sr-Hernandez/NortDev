function toastcopiar(id_elemento){
    Swal.fire({
position: 'center-start',
icon: 'success',
title: 'Numero copiado',
showConfirmButton: false,
timer: 900
})

var aux = document.createElement("input");
aux.setAttribute("value", "6251058358");
document.body.appendChild(aux);
aux.select();
document.execCommand("copy");
document.body.removeChild(aux);
  }

  function mandarmensaje() {
    Swal.fire({
      title: '<strong>Dejame un mensaje</strong>',
      icon: 'info',
      iconColor: '#212D3B',
      html:
       ' <form method="GET"action="contacto_mensaje_cv" ">' +
        '<input type="text" hidden value="cv"  name="name"   maxlength="8" size="10">' +
        '<input type="text" hidden value="cv"  name="phone1"  maxlength="8" size="10">' +
        '<input type="text" hidden value="cv"  name="email"   maxlength="8" size="10">' +
        '<input class="input-mensaje" type="text" name="mensaje" required   size="10">' +
        '<button class="btn-mensaje" type="submit">Enviar</button>' +
        '</form> ',
      showCloseButton: true,
      showCancelButton: false,
      showConfirmButton: false,
      focusConfirm: false    })
  }

  function guardarmensaje(result){
    $.ajax({
      url: "contacto_mensjae",
      method: "GET",
      data: {
        name: "CV",
        email:"CV",
        phone1 :"CV",
        mensaje: result
      }
    });

  }
  // funcion para hacer dinamico el menú
  function acciones_menu(menu) {

    
   
      if(menu == "experiencia"){
        RemoverClaseActivo()
       document.getElementById("ex").classList.add('activo');
       
       document.getElementById("div-experiencia-t1").classList.add('div_din_visible');
          console.log("ex");
      }
      if(menu == "habilidades"){
        RemoverClaseActivo()
       document.getElementById("ha").classList.add('activo');
       
          console.log("ha");
      }
      if(menu == "educacion"){
        RemoverClaseActivo()
        document.getElementById("ed").classList.add('activo');
       
          console.log("ed");
      }
      if(menu == "referencias"){
        RemoverClaseActivo()
        document.getElementById("re").classList.add('activo');
       
          console.log("re");
      }

  }

  function RemoverClaseActivo(){
    console.log("1");
     document.getElementById("ex").classList.remove('activo');
     document.getElementById("ha").classList.remove('activo');
     document.getElementById("ed").classList.remove('activo');
     document.getElementById("re").classList.remove('activo');
     document.getElementById("div-experiencia-t1").classList.remove('div_din_visible');
   

  }
  // $contacto->name =  $request->input('name');
  // $contacto->email =  $request->input('email');
  // $contacto->phone1 =  $request->input('phone1');
  // $contacto->mensaje =  $request->input('mensaje');