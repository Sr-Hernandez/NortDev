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
      title: 'Dejame un mensaje',
      input: 'text',
      inputAttributes: {
        autocapitalize: 'off'
      },
      showCancelButton: true,
      confirmButtonText: 'Enviar',
      confirmButtonColor:'#212D3B',
      cancelButtonText: 'Cancelar',
      showLoaderOnConfirm: true
    }).then((result) => {
      if (result.isConfirmed) {
        guardarmensaje(result);
        Swal.fire({
          
          title: `${result.value.login}'s avatar`,
          imageUrl: result.value.avatar_url
        })
      }
    })
  }

  function guardarmensaje(result){
  

  }

  // $contacto->name =  $request->input('name');
  // $contacto->email =  $request->input('email');
  // $contacto->phone1 =  $request->input('phone1');
  // $contacto->mensaje =  $request->input('mensaje');