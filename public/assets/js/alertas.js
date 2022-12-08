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
      cancelButtonText: 'Cancelar',
      showLoaderOnConfirm: true,
      preConfirm: (login) => {
        return fetch(`//api.github.com/users/${login}`)
          .then(response => {
            if (!response.ok) {
              throw new Error(response.statusText)
            }
            return response.json()
          })
          .catch(error => {
            Swal.showValidationMessage(
              `Request failed: ${error}`
            )
          })
      },
      allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: `${result.value.login}'s avatar`,
          imageUrl: result.value.avatar_url
        })
      }
    })
  }