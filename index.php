<?php include_once 'includes/templates/header.php'; ?>
    <div class="seccion contenedor">
      <h2>La mejor conferencia de diseño web</h2>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non veniam
        cupiditate facilis laboriosam. Architecto tempora, quod possimus ab
        dolores iusto saepe corporis libero minima odio laborum provident
        tempore. Consequatur, earum!
      </p>
    </div>
    <section class="eventos">
      <div class="cont-video">
        <video autoplay loop>
          <source src="video/video.mp4" type="video/mp4" />
          <source src="video/video.ogv" type="video/ogg" />
          <source src="video/video.webm" type="video/webm" />
        </video>
      </div>
      <div class="cont-eventos">
        <div class="contenedor">
          <div class="evento">
            <h2>Próximos Eventos</h2>
            <nav class="menu-eventos">
              <a href="#talleres" class="activo"><i class="fa fa-code"></i>Talleres</a>
              <a href="#conferencias"><i class="fa fa-comment"></i>Conferencias</a>
              <a href="#seminarios"><i class="fa fa-university"></i>Seminarios</a>
            </nav>

            <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>HTML5, CSS3 Y JAVASCRIPT</h3>
                <p><i class="fa fa-clock" aria-hidden="true"></i>16:00 hrs</p>
                <p>
                  <i class="fa fa-calendar" aria-hidden="true"></i>10/12/2020
                </p>
                <p>
                  <i class="fa fa-user" aria-hidden="true"></i>Juan Echenique
                </p>
              </div>
              <div class="detalle-evento">
                <h3>DISEÑO RESPONSIVO</h3>
                <p><i class="fa fa-clock" aria-hidden="true"></i>18:00 hrs</p>
                <p>
                  <i class="fa fa-calendar" aria-hidden="true"></i>10/12/2020
                </p>
                <p><i class="fa fa-user" aria-hidden="true"></i>Pablo Vargas</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
            </div>
            
            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Como ser freelancer</h3>
                <p><i class="fa fa-clock" aria-hidden="true"></i>10:00 hrs</p>
                <p>
                  <i class="fa fa-calendar" aria-hidden="true"></i>11/12/2020
                </p>
                <p>
                  <i class="fa fa-user" aria-hidden="true"></i>Juan Echenique
                </p>
              </div>
              <div class="detalle-evento">
                <h3>¿Es necesario JS?</h3>
                <p><i class="fa fa-clock" aria-hidden="true"></i>19:00 hrs</p>
                <p>
                  <i class="fa fa-calendar" aria-hidden="true"></i>11/12/2020
                </p>
                <p><i class="fa fa-user" aria-hidden="true"></i>Pablo Vargas</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
            </div>
            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Diseño IU/UX</h3>
                <p><i class="fa fa-clock" aria-hidden="true"></i>14:00 hrs</p>
                <p>
                  <i class="fa fa-calendar" aria-hidden="true"></i>11/12/2020
                </p>
                <p>
                  <i class="fa fa-user" aria-hidden="true"></i>Juan Echenique
                </p>
              </div>
              <div class="detalle-evento">
                <h3>Aprendiendo a Programar</h3>
                <p><i class="fa fa-clock" aria-hidden="true"></i>15:00 hrs</p>
                <p>
                  <i class="fa fa-calendar" aria-hidden="true"></i>10/12/2020
                </p>
                <p><i class="fa fa-user" aria-hidden="true"></i>Pablo Vargas</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php include_once 'includes/templates/invitados.php'; ?>  
    <!-- <section class="contenedor">
      <h2>Nuestros Invitados</h2>
      <div class="exponentes">
        <div class="exponente">
          <img src="img/invitado1.png" alt="" />
          <p class="nom-expo">Juan Echenique</p>
        </div>
        <div class="exponente">
          <img src="img/invitado2.jpg" alt="" />
          <p class="nom-expo">Juliana Ortiz</p>
        </div>
        <div class="exponente">
          <img src="img/invitado3.jpg" alt="" />
          <p class="nom-expo">Alexis Vargas</p>
        </div>
        <div class="exponente">
          <img src="img/invitado4.jpg" alt="" />
          <p class="nom-expo">Patricia Lopez</p>
        </div>
        <div class="exponente">
          <img src="img/invitado5.jpg" alt="" />
          <p class="nom-expo">Samuel Garcia</p>
        </div>
        <div class="exponente">
          <img src="img/invitado6.jpg" alt="" />
          <p class="nom-expo">Liliana Ortega</p>
        </div>
      </div>
    </section> -->
    <section class="invitados">
      <div class="item-invitados">
        <h3></h3>
        <p>Invitados</p>
      </div>
      <div class="item-invitados">
        <h3></h3>
        <p>Invitados</p>
      </div>
      <div class="item-invitados">
        <h3></h3>
        <p>Invitados</p>
      </div>
      <div class="item-invitados">
        <h3></h3>
        <p>Invitados</p>
      </div>
    </section>
    <section class="contenedor">
      <h2>Precios</h2>
      <div class="precios">
        <div class="card-precio">
          <h4>Pase por 1 dia</h4>
          <p class="valor">$30.000</p>
          <p><i class="icon-precio fas fa-check"></i>acceso a 3 conferencias</p>
          <p><i class="icon-precio fas fa-check"></i>todos los talleres</p>
          <p><i class="icon-precio fas fa-check"></i>refrigerio</p>
          <a href="" class="btn-precio btn-border">Comprar</a>
        </div>
        <div class="card-precio card-active">
          <h4>Pase por 3 dias</h4>
          <p class="valor">$75.000</p>
          <p>
            <i class="icon-precio fas fa-check"></i>acceso a todas las
            conferencias
          </p>
          <p><i class="icon-precio fas fa-check"></i>todos los talleres</p>
          <p><i class="icon-precio fas fa-check"></i>refrigerio</p>
          <a href="" class="btn-precio">Comprar</a>
        </div>
        <div class="card-precio">
          <h4>Pase completo</h4>
          <p class="valor">$150.000</p>
          <p>
            <i class="icon-precio fas fa-check"></i>acceso a todas las
            conferencias
          </p>
          <p><i class="icon-precio fas fa-check"></i>todos los talleres</p>
          <p><i class="icon-precio fas fa-check"></i>refrigerio y regalo</p>
          <a href="" class="btn-precio btn-border">Comprar</a>
        </div>
      </div>
    </section>
    <section class="mapa" id="mapa">
      
    </section>
    <section class="contenedor">
      <h2>testimoniales</h2>
      <div class="testimoniales">
        <blockquote>
          <p class="testi">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam.
          </p>
          <footer class="foot-test">
            <img src="img/testimonial.jpg" alt="" />
            <div class="txt-test">
              <h4>juan pablo echenique</h4>
              <p>Diseñador Web</p>
            </div>
          </footer>
        </blockquote>
        <blockquote>
          <p class="testi">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam.
          </p>
          <footer class="foot-test">
            <img src="img/testimonial.jpg" alt="" />
            <div class="txt-test">
              <h4>juan pablo echenique</h4>
              <p>Diseñador Web</p>
            </div>
          </footer>
        </blockquote>
        <blockquote>
          <p class="testi">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam.
          </p>
          <footer class="foot-test">
            <img src="img/testimonial.jpg" alt="" />
            <div class="txt-test">
              <h4>juan pablo echenique</h4>
              <p>Diseñador Web</p>
            </div>
          </footer>
        </blockquote>
      </div>
    </section>
    <section class="banner-two">
      <h4>Regístrate al newsletter:</h4>
      <h1 class="nombre-sitio nomargin">WebEventos</h1>
      <a href="" class="btn-white">Registro</a>
    </section>
    <section>
      <h2>Faltan</h2>
      <div class="contador">
        <div class="item-contador">
          <h3 id="dias"></h3>
          <p>Dias</p>
        </div>
        <div class="item-contador">
          <h3 id="horas"></h3>
          <p>Horas</p>
        </div>
        <div class="item-contador">
          <h3 id="minutos"></h3>
          <p>Minutos</p>
        </div>
        <div class="item-contador">
          <h3 id="segundos"></h3>
          <p>segundos</p>
        </div>
      </div>
    </section>
    <?php include_once 'includes/templates/footer.php'; ?>