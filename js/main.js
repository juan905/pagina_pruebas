(function(){
 "use strict";
 
 //LETTERING
  $('.nombre-sitio').lettering();
 

//AGREANDO LA CLASE ACTIVO

  $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
  $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
  $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');



 //MENU MOVIL//

//2do paso crear el metodo para decirnos la altura de la ventana
var windowHeight = $(window).height();
 
//3er paso
var barraAltura = $('.barra').innerHeight();

//1er paso. Crear el scroll
 $(window).scroll(function(){
   var scroll = $(window).scrollTop();
   //4to paso
   if (scroll > windowHeight) {
     $('.barra').addClass('fixed');
     $('body').css({'margin-top': barraAltura+'px'});
   }else{
    $('.barra').removeClass('fixed');
    $('body').css({'margin-top': '0px'});
   }
 }) //5TO paso, crear el archivo fixed en css


  //Menu Desplegable

 
  $('.menu-movil').on('click', function(){
    $('.navegacion-principal').slideToggle();
   })
  
 
 document.addEventListener('DOMContentLoaded', function(){
  if (document.getElementById('mapa')){
    var map = L.map('mapa').setView([4.532506, -75.705167], 16);
  
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);
  
  L.marker([4.532506, -75.705167]).addTo(map)
      .bindPopup('GDLWebCam 2020 <br> Boletos ya disponibles')
      .openPopup()
      .bindTooltip('Tel: 3136989463')
      .openTooltip();
  
  }





    //Campos Datos Usuario
      var nombre = document.querySelector("#nombre");
      var apellido = document.querySelector("#apellido");
      var email = document.querySelector("#email");

    //Campos pases
    var pase_dia = document.querySelector("#pase_dia");
    var pase_dosdias = document.querySelector("#pase_dosdias");
    var pase_completo = document.querySelector("#pase_completo");

    //Botones y divs
    var calcular = document.querySelector("#calcular");
    var error = document.querySelector("#error");
    var pagar = document.querySelector("#pagar"); //btnRegistro
    var lista_final = document.querySelector("#lista-final"); //lista-productos
    var regalo = document.querySelector("#regalo");
    var suma = document.querySelector("#suma-total");

    //Extras
    var camisas = document.querySelector('#camisa_evento');
    var etiquetas = document.querySelector('#etiquetas');
    
    
      if (pagar) {
        pagar.disabled = true;
        console.log(pagar);
        }
      
    
    
    

if (calcular) {
  calcular.addEventListener("click", calcularMontos);
}

     function calcularMontos(event){
      event.preventDefault();
      if (regalo.value == '') {
          alert('Seleccione Un Regalo');
          regalo.focus();
      } else {
        
          var boletosDia = parseInt(pase_dia.value, 10) || 0,
              boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
              boletoCompleto = parseInt(pase_completo.value, 10) || 0,
              cantCamisas = parseInt(camisas.value, 10) || 0,
              cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

            var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

            var listaProductos = [];

            if (boletosDia >= 1) {
              listaProductos.push(`Pases por Día: ${boletosDia}`);
            } 
            
            if(boletos2Dias >= 1) {
              listaProductos.push(`Pases por 2 Días: ${boletos2Dias}`);
            } 
            
            if(boletoCompleto >= 1){
              listaProductos.push(`Pases completos: ${boletoCompleto}`);
            }
            
            if(cantCamisas >= 1){
              listaProductos.push(`Camisas seleccionadas: ${cantCamisas}`);

            } if(cantEtiquetas >= 1){
              listaProductos.push(`Etiquetas seleccionadas: ${cantEtiquetas}`);
            } 
              
            lista_final.style.display="block";
            lista_final.innerHTML = '';
            for (let i = 0; i < listaProductos.length; i++) {
              lista_final.innerHTML += listaProductos[i] + '<br/>';
              
            }

            suma.innerHTML = ` $  ${totalPagar.toFixed(2)}`;  

            pagar.disabled = false;
            document.querySelector("#total_pedido").value = totalPagar;
            
      }
     }


     //OCULTAR LOS DIAS DE CONFERENCIA

     if (pase_dia || pase_dosdias || pase_completo) {
       
      pase_dia.addEventListener('blur', mostrarDias);
      pase_dosdias.addEventListener('blur', mostrarDias);
      pase_completo.addEventListener('blur', mostrarDias);
     }
     

     function mostrarDias(event) {
       event.preventDefault();
       var boletosDia = parseInt(pase_dia.value, 10) || 0,
              boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
              boletoCompleto = parseInt(pase_completo.value, 10) || 0;

              var diasElegidos = [];

              if (boletosDia >= 1) {
                 diasElegidos.push('viernes');
              }

              if(boletos2Dias > 0){
                diasElegidos.push('viernes', 'sabado');
              }

              if(boletoCompleto > 0){
                diasElegidos.push('viernes', 'sabado', 'domingo');
              }

              for (let i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display="block";
              }
     }

       if (nombre || apellido || email) {
        nombre.addEventListener('blur', validar);
        apellido.addEventListener('blur', validar);
        email.addEventListener('blur', validar);
       }
       
      
       function validar(event){
         event.preventDefault();
         if (this.value == '') {
           error.style.display = "block";
           error.innerHTML = "Este campo es obligatorio";
           this.style.border = "1px solid red";
           error.style.border = "1px solid red";
         } else{
           error.style.display = 'none';
           this.style.border = "1px solid #cccccc";
         }
       }

       if (email) {
        email.addEventListener('blur', validarEmail);
       }
       

       function validarEmail(event) {
         event.preventDefault();
         if (this.value.indexOf("@") > -1) {
          error.style.display = 'none';
         } else {
          error.style.display = "block";
          error.innerHTML = "Tu correo debe tener un @";
          this.style.border = "1px solid red";
          error.style.border = "1px solid red";
         }
       }
    


 });//DOMContentLoaded
})();


/*Uso de Jquery para las conferencias*/

(function(){
  "use strict";

  $('.ocultar').hide();

  $('.programa-evento .info-curso:first').show();

  $('.programa-evento nav a:first').addClass('activo');

  $('.programa-evento nav a').on("click", function() {
    $('.programa-evento nav a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').fadeOut(1000);
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);


    return false;
  })

  //ANIMACIONES DE LOS NUMEROS

  $('.resumen-evento li:nth-child(1) p').animateNumber({ number:6}, 1200);
  $('.resumen-evento li:nth-child(2) p').animateNumber({ number:15}, 1200);
  $('.resumen-evento li:nth-child(3) p').animateNumber({ number:3}, 1500);
  $('.resumen-evento li:nth-child(4) p').animateNumber({ number:9}, 1500);


  //CUENTA REGRESIVA

  $('.cuenta-regresiva').countdown('2020/12/31 09:00:00', function (event) {
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
   
    
  });

   //COLORBOX
   
   $('.invitado_info').colorbox({inline:true, width:"50%"});
  
  




})();