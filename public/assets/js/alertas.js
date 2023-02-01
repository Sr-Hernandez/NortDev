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

   
    
    if(menu =="resumen"){

      RemoverClaseActivo();
      ocultar();
      document.getElementById("res").classList.add('activo');
      document.getElementById("div-general").classList.remove('div_din_invisible');
    }

      if(menu == "experiencia"){
       RemoverClaseActivo();
       ocultar();
      //  console.log("prueba exp");
       document.getElementById("ex").classList.add('activo');
       document.getElementById("div-general-experiencia").classList.remove('div_din_invisible');
       
      
         
      }
      
      if(menu == "habilidades"){
        RemoverClaseActivo();
        ocultar();
       document.getElementById("ha").classList.add('activo');
       document.getElementById("div-general-habilidades").classList.remove('div_din_invisible');
          // console.log("ha");
      }
      if(menu == "educacion"){
        ocultar();
        RemoverClaseActivo();
        // RemoverClaseVisible();
        document.getElementById("ed").classList.add('activo');
       
          // console.log("ed");
      }
      if(menu == "referencias"){
        ocultar();
        RemoverClaseActivo();
        // RemoverClaseVisible();
        document.getElementById("re").classList.add('activo');
       
          // console.log("re");
      }

  }
  function RemoverClaseVisible(div_id){
          // document.getElementById("div-experiencia-t1").classList.remove('div_din_visible');
          document.getElementById("div-experiencia").classList.remove('div_din_visible');
          
  }
  function ocultar(div_id){
  
    document.getElementById("div-general").classList.add('div_din_invisible');
    document.getElementById("div-general-habilidades").classList.add('div_din_invisible');
    document.getElementById("div-general-experiencia").classList.add('div_din_invisible');
    // console.log("ocultar");
  }

  function RemoverClaseActivo(){
    //console.log("1");
     document.getElementById("ex").classList.remove('activo');
     document.getElementById("ha").classList.remove('activo');
     document.getElementById("ed").classList.remove('activo');
     document.getElementById("re").classList.remove('activo');
     document.getElementById("res").classList.remove('activo');

  //  console.log("clase ocultar");
   

  }
 
  function mensjae(){
    Swal.fire({
      position: 'center-start',
      icon: 'success',
      title: 'Gracias por tu mensaje!',
      showConfirmButton: false,
      timer: 900
      })
  }