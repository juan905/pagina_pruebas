
   <section class="seccion contenedor">
        <h2>Nuestros Invitados</h2>

        <?php
          try {
            require "includes/funciones/bd_conexion.php";

            $sql = "SELECT * FROM invitados"; 
            $resultado = $conn->query($sql); //Query es una funcion de php para hacer la consulta
          } catch (\Exception $e) {
              echo $e->getMessage();
          }

        ?>
         

            <section class="invitados contenedor seccion">
            
               <ul class="lista-invitados clearfix">
                  <?php while ($invitados = $resultado->fetch_assoc() ) { ?>
                        <li>
                            <div class="invitado">
                                 <a class="invitado_info" href="#invitado<?php echo $invitados['invitado_id']; ?>">
                                    <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="">
                                    <p><?php echo $invitados['nombre_invitado']. " " . $invitados['apellido_invitado'] ?></p>
                                </a>
                            </div>
                        </li>
                          <div style="display:none;">
                              <div class="invitado_info" id="invitado<?php echo $invitados['invitado_id']; ?>">
                                 <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?></h2>
                                 <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="">
                                <p><?php echo $invitados['descripcion']; ?></p>
                              </div>
                          </div>
        
                     <?php } //Cierre del ciclo WHILE?>

                </ul>
           </section> 
        

         <?php $conn->close();?>
       
    </section>