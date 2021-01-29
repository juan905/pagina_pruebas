<?php require "includes/templates/header.php"; ?>


    <section class="seccion contenedor">
        <h2>Calendario de eventos</h2>

        <?php
          try {
            require "includes/funciones/bd_conexion.php";
            $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
            $sql .= " FROM eventos ";
            $sql .= " INNER JOIN categoria_evento ";
            $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= " INNER JOIN invitados ";
            $sql .= "ON eventos.id_inv = invitados.invitado_id";
            $resultado = $conn->query($sql); //Query es una funcion de php para hacer la consulta
          } catch (\Exception $e) {
              echo $e->getMessage();
          }
        ?>
         

         <div class="calendario clearfix">

           <?php
             $calendario = array();
           //4. IMPRIMIMOS LOS RESULTADOS

          while ($eventos = $resultado->fetch_assoc() ) { 

            //var_dump($eventos);

            $fecha = $eventos['fecha_evento'];

            $evento = array(
              'titulo' => $eventos['nombre_evento'],
              'fecha' => $eventos['fecha_evento'],
              'hora' => $eventos['hora_evento'],
              'categoria' => $eventos['cat_evento'],
              'icono' => 'fa' . " " . $eventos['icono'],
              'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
            );

            $calendario[$fecha][] = $evento;
            
            ?>
             
          <?php } //Cierre del ciclo WHILE?>

          <?php 
          //Imprime todos los eventos

          foreach ($calendario as $dia => $lista_eventos) { 
            ?>
               

               <?php foreach ($lista_eventos as $evento) { ?>
                  <div class="dia">
                     
                     <p class="titulo">
                       <?php echo $evento['titulo']; ?>
                      </p>

                     <p class="hora"> <!--Hora -->
                         <i class="far fa-clock" aria-hidden="true"></i>
                         <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                     </p>

                     <p class="categoria">  <!--Categoria -->
                     <i class=" <?php echo $evento['icono'] ?>" aria-hidden="true"></i>
                        <?php echo $evento['categoria']; ?>
                     </p>

                     <p class="invitado"> <!--INVITADO -->
                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                        <?php echo $evento['invitado']; ?>
                     </p>

                  </div>
              <?php } //Fin del ciclo evento?>

         <?php } //Fin del ciclo dia?>

         
         </div>

         <?php $conn->close();?>
       
    </section>


   

    <?php require "includes/templates/footer.php"; ?>