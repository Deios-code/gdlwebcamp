<?php
            try{
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT * FROM invitados ";
                // lo que hice en las anteriores lineas sql  fue para relacionar y llamar todos los datos
                // los de la tabal eventos y sus llaves foraneas
                $resultado = $conn->query($sql);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        ?>
        <section class="contenedor">
            <h2>Invitados</h2>
            
        <div class="exponentes"> <?php 
                // <!-- lo que voy a hacer es muy usado -->
                 while ($invitados = $resultado->fetch_assoc()){ ?>
                 
            <div class="exponente">
                <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']; ?>">
                    <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="" />
                    <p class="nom-expo"><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado']?></p>
                </a>
            </div>
            <div style="display:none;">
                    <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id']; ?>">
                        <h2><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado']?></h2>
                        <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="" />
                        <p><?php echo $invitados['descripcion'] ?></p>
                    </div>
            </div>
            <?php } ?>
            
        </div>
        
    </section>

            <!-- <pre>  -->
                <!--Se imprime fuera del while cuando tengo que hacer pruebas-->
                <?php //var_dump($calendario); ?> 
            <!-- </pre> -->
            <?php
                 $conn->close();//hay que cerrar la conexión al final de cada consulta
            ?>
    </section>