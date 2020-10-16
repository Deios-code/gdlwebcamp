<?php include_once 'includes/templates/header.php'; ?>
    <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>
<!-- codigo basico para Conectar, obtener y mostrar datos de la BD
        <?php
            // try{
            //     require_once('includes/funciones/bd_conexion.php');
            //     $sql = "SELECT * FROM eventos";
            //     $resultado = $conn->query($sql);
            // }catch(Exception $e){
            //     echo $e->getMessage();
            // }
        ?>
    <div class="calendario">
            <?php 
                ////while ($eventos = $resultado->fetch_assoc()){ ?>
                    <pre>
                        <?php //print_r($eventos); ?>
                    </pre>
            <?php  //}    ?>
            <?php
                // $conn->close();//hay que cerrar la conexión al final de cada consulta
            ?>
    </div> -->
    <!-- codigo pro -->
    <?php
            try{
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento,
                        cat_evento, icono, nombre_invitado, apellido_invitado "; //hay que dejar un espacio entre 
                                                                        //la ultima letra y la comilla
                $sql .=" FROM eventos ";
                $sql .=" INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";    
                $sql .= " INNER JOIN invitados";
                $sql .= " ON eventos.id_inv = invitados.invitado_id";
                $sql .= " ORDER BY evento_id ";
                // lo que hice en las anteriores lineas sql  fue para relacionar y llamar todos los datos
                // los de la tabal eventos y sus llaves foraneas
                $resultado = $conn->query($sql);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        ?>
        <div class="site-calendario">
            <?php 
                // <!-- lo que voy a hacer es muy usado -->
                $calendario = array(); //-> este tiene que estar fuera del while
                while ($eventos = $resultado->fetch_assoc()){ 
                    $fecha = $eventos['fecha_evento']; //obtengo la fecha del evento
                    // para "agruparlos" en relación a la fecha
                    $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
                        'icono' => 'fas'." ".$eventos['icono'],
                        'invitado' => $eventos['nombre_invitado'] ." ".$eventos['apellido_invitado']
                    );
                    // Acá practicamente los muestro según la fecha 
                    $calendario[$fecha][]= $evento; //dentro del while
                }
                ?>
                <?php
                    foreach($calendario as $dia => $lista_eventos){?>

                    <h3 class="fecha-cal">
                        <i class="fas fa-calendar-alt"></i>
                        <!-- para que no me de el mes en ingles debo agregar: -->
                        <?php 
                        // para usuarios unix 
                        setlocale(LC_TIME, 'es_ES.UTF-8');
                        // para windows
                        setlocale(LC_TIME, 'spanish.UTF-8');
                        echo strftime("%A, %d de %B del %Y",strtotime($dia)); ?>
                    </h3>
                    
                    <div class="cont-dia-evento">
                        <?php foreach($lista_eventos as $evento){?>
                               <div class="dia"> 
                                    <h3 class="titulo"><?php echo $evento['titulo'] ?></h3>
                                    <p class="hora"><i class="far fa-clock" aria-hidden="true"></i>
                                                    <?php echo $evento['fecha']." / ".$evento['hora']." hrs" ?>
                                    </p>
                                    <p><i class="<?php echo $evento['icono'] ?>" aria-hidden="true"></i>
                                        <?php echo $evento['categoria'] ?></p>
                                    <p><i class="far fa-user" aria-hidden="true"></i>
                                        <?php echo $evento['invitado'] ?>
                                    </p>
                            </div>
                        <?php } ?>
                    
                    </div>
                <?php } ?>

            <!-- <pre>  -->
                <!--Se imprime fuera del while cuando tengo que hacer pruebas-->
                <?php //var_dump($calendario); ?> 
            <!-- </pre> -->
            <?php
                 $conn->close();//hay que cerrar la conexión al final de cada consulta
            ?>
        </div>
    </section>
<?php include_once 'includes/templates/footer.php'; ?>