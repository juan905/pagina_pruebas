addEventListeners();

function addEventListeners() {
  document.querySelector("#formulario").addEventListener('submit', validarRegistro);
}

function validarRegistro(e) {
  e.preventDefault();
  
  const usuario = document.querySelector("#usuario").value,
        nombre = document.querySelector("#nombre").value,
        password = document.querySelector("#password").value,
        registrar = document.querySelector("#registrar").value;

    if (usuario == "" || nombre == "" || password == "") {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Todos los campos son obligatorios!',
      })
    } else {
      var datos = new FormData();
       datos.append('usuario', usuario);
       datos.append('nombre', nombre);
       datos.append('password', password);
       datos.append('accion', registrar);


        //Crear el llamado a AJAX

        var xhr = new XMLHttpRequest();

        //Abrir la conexion
        xhr.open('POST', 'inc/models/modelo-admin.php', true);

        //Retorno de datos

        xhr.onload = function(){
         if(this.status == 200){
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
            if (respuesta.respuesta === 'correcto') {
              //Si es un nuevo usuario
              if (respuesta.tipo === 'nuevo') {
                 Swal.fire({
                     icon: 'success',
                     title: 'Usuario Creado',
                     text: 'Bienvenid@ ' + respuesta.nombre + '',
                   });
              } else if(respuesta.tipo === 'login'){
                
                Swal.fire({
                    icon: 'success',
                    title: 'Login Correcto',
                    text: 'Presiona Ok para acceder al dashboard',
                  })
                  .then(resultado=>{
                      if (resultado.value) {
                          window.location.href = 'admin-area.php';
                      }
                  })
             }
          } else if(respuesta.respuesta === 'error'){
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'El usuario ' + respuesta.usuario + ' ya existe en la base de datos',
            })

          } else{
             Swal.fire({
                 icon: 'error',
                 title: 'Oops...',
                 text: 'Hubo un error!',
               })
          }
        }
    } 
    xhr.send(datos);
}
}