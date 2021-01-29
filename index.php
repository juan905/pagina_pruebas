<?php require "includes/templates/header.php"; ?>

    <section class="seccion contenedor">
        <h2>La Mejor Conferencia De Diseño Web En Español</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit enim id sapien mollis tincidunt. Sed in aliquam dui. Donec ac justo ac justo eleifend luctus. In nec eros commodo, congue sem at, ornare nisl. Morbi cursus arcu odio, feugiat ultrices
            lorem congue eget. Ut id ante eget velit tristique ultrices. Donec maximus molestie ante mollis luctus. Quisque laoreet in arcu nec sagittis. Mauris euismod neque ut fermentum scelerisque.
        </p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="bg-talleres.jpg" muted>
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogv">
            </video>
        </div>
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa Del Evento</h2>
                    <?php
                        try {
                            require "includes/funciones/bd_conexion.php";
                            $sql = "SELECT * FROM categoria_evento";
                            $resultado = $conn->query($sql); //Query es una funcion de php para hacer la consulta
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }
                        ?>
                    <nav class="menu-programa">
                        <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                             <?php $categoria = $cat['cat_evento'];?>
                             <?php $icono = $cat['icono'];?>
                             <a href="#<?php echo strtolower($categoria)?>"><i class="<?php echo $icono; ?>"></i><?php echo $categoria; ?></a>
                        <?php } ?>
                    </nav>

                    <?php
                            try {
                                require "includes/funciones/bd_conexion.php";


                                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                                $sql .= " FROM eventos ";
                                $sql .= " INNER JOIN categoria_evento ";
                                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria "; //De la tabla de eventos y de la tabla categoria, cuales columnas son las que deben de ser iguales
                                $sql .= " INNER JOIN invitados ";
                                $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                                $sql .= "AND eventos.id_cat_evento = 1";
                                $sql .= " ORDER BY evento_id LIMIT 2;";
                                $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                                $sql .= " FROM eventos ";
                                $sql .= " INNER JOIN categoria_evento ";
                                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria "; //De la tabla de eventos y de la tabla categoria, cuales columnas son las que deben de ser iguales
                                $sql .= " INNER JOIN invitados ";
                                $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                                $sql .= "AND eventos.id_cat_evento = 2";
                                $sql .= " ORDER BY evento_id LIMIT 2;";
                                $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                                $sql .= " FROM eventos ";
                                $sql .= " INNER JOIN categoria_evento ";
                                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria "; //De la tabla de eventos y de la tabla categoria, cuales columnas son las que deben de ser iguales
                                $sql .= " INNER JOIN invitados ";
                                $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                                $sql .= "AND eventos.id_cat_evento = 3";
                                $sql .= " ORDER BY evento_id LIMIT 2;";
                                //3.CONSULTAMOS LA BASE DE DATOS
                                //$resultado = $conn->query($sql); //Query es una funcion de php para hacer la consulta
                            } catch (\Exception $e) {
                                echo $e->getMessage();
                            }
                     ?>

            <?php $conn->multi_query($sql); ?>

        <?php 

                    do {
                        $resultado = $conn->store_result();
                        $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>
                        <?php $i = 0; ?>
                        <?php foreach($row as $evento): ?>
                        <?php if($i % 2 == 0) : ?>
                        <div id="<?php echo strtolower($evento['cat_evento'])?>" class="info-curso ocultar clearfix">
                        <?php endif; ?>
                        <div class="detalle-evento">
                            <h3><?php echo utf8_encode($evento['nombre_evento']);?></h3>
                            <p><i class="far fa-clock"></i><?php echo $evento['hora_evento'];?></p>
                            <p><i class="far fa-calendar-alt"></i><?php echo $evento['fecha_evento'];?></p>
                            <p><i class="fas fa-user-tie"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado'];?></p>
                        </div>
                    
                    <?php if($i % 2 == 1) : ?>
                        <a href="calendario.php" class="button float-right">Ver Todos</a>
                    </div>
                    <?php endif; ?>
                    <?php $i++; ?>
                        <?php endforeach; ?>
                        <?php $resultado->free(); ?>
                    <?php  } while ($conn->more_results() && $conn->next_result()); ?>
                </div>
            </div>
        </div>
</section>
    <?php require "includes/templates/invitados.php"; ?>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento">
                <li>
                    <p class="numero"></p>Invitados</li>
                <li>
                    <p class="numero"></p>Talleres</li>
                <li>
                    <p class="numero"></p>Días</li>
                <li>
                    <p class="numero"></p>Conferencias</li>
            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase Por Dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas Las Conferencias</li>
                            <li><i class="fas fa-check"></i>Tods Los Talleres</li>
                        </ul>
                        <a href="" class="button hollow">Comprar</a>
                    </div>

                    <div class="tabla-precio">
                        <h3>Todos Los Días</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas Las Conferencias</li>
                            <li><i class="fas fa-check"></i>Tods Los Talleres</li>
                        </ul>
                        <a href="" class="button">Comprar</a>
                    </div>

                    <div class="tabla-precio">
                        <h3>Pase Por 2 dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas Las Conferencias</li>
                            <li><i class="fas fa-check"></i>Tods Los Talleres</li>
                        </ul>
                        <a href="" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div id="mapa" class="mapa">

    </div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p><i class="fas fa-quote-right"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum porro voluptates odio, facilis nostrum nemo delectus obcaecati et unde. Nihil illum alias blanditiis magni, ipsam necessitatibus numquam
                        temporibus earum est.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Oswaldo Aponte Escobedo<span>@Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>

            <div class="testimonial">
                <blockquote>
                    <p><i class="fas fa-quote-right"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum porro voluptates odio, facilis nostrum nemo delectus obcaecati et unde. Nihil illum alias blanditiis magni, ipsam necessitatibus numquam
                        temporibus earum est.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Richard Gutierrez<span>@Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>

            <div class="testimonial">
                <blockquote>
                    <p><i class="fas fa-quote-right"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum porro voluptates odio, facilis nostrum nemo delectus obcaecati et unde. Nihil illum alias blanditiis magni, ipsam necessitatibus numquam
                        temporibus earum est.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Adrian Berbia<span>@Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Regístrate Al Newsletter</p>
            <h3>GdlWebcamp</h3>
            <a href="" class="button transparente">Registro</a>
        </div>
    </div>

    <div class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>Días</li>
                <li>
                    <p id="horas" class="numero"></p>Horas</li>
                <li>
                    <p id="minutos" class="numero"></p>Minutos</li>
                <li>
                    <p id="segundos" class="numero"></p>Segundos</li>
            </ul>
        </div>
    </div>

    <?php require "includes/templates/footer.php"; ?>