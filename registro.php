<?php include_once 'includes/templates/header.php'; ?>
    <section class="site-form contenedor">
      <h2>Registro de usuarios</h2>
      <form action="" id="formulario" class="formulario" method="POST">
        <div id="datos" class="datos">
          <div class="ing-datos">
            <label for="name">Nombre:</label>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Tu Nombre"
              required
            />
          </div>
          <div class="ing-datos">
            <label for="lastname">Apellido:</label>
            <input
              type="text"
              name="lastname"
              id="lastname"
              placeholder="Tu Apellido"
              required
            />
          </div>
          <div class="ing-datos">
            <label for="mail">Email:</label>
            <input
              type="email"
              name="mail"
              id="mail"
              placeholder="Tu Email"
              required
            />
          </div>
          <div id="error"></div>
        </div>
        <div id="boletos" class="boletos">
          <h3>elige el numero de boletos</h3>
          <div class="precios">
            <div class="card-precio">
              <h4>Pase por 1 dia</h4>
              <p class="valor">$30.000</p>
              <p>
                <i class="icon-precio fas fa-check"></i>acceso a 3 conferencias
              </p>
              <p><i class="icon-precio fas fa-check"></i>todos los talleres</p>
              <p><i class="icon-precio fas fa-check"></i>refrigerio</p>
              <label for="cant-boletos">Boletos Deseados:</label>
              <input
                type="number"
                name="cant-boletos"
                min="0"
                max="100"
                placeholder="0"
                id="pase_dia"
              />
            </div>
            <div class="card-precio">
              <h4>Pase por 3 dias</h4>
              <p class="valor">$75.000</p>
              <p>
                <i class="icon-precio fas fa-check"></i>acceso a todas las
                conferencias
              </p>
              <p><i class="icon-precio fas fa-check"></i>todos los talleres</p>
              <p><i class="icon-precio fas fa-check"></i>refrigerio</p>
              <label for="cant-boletos">Boletos Deseados:</label>
              <input
                type="number"
                name="cant-boletos"
                min="0"
                max="100"
                placeholder="0"
                id="pase_tresdia"
              />
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
              <label for="cant-boletos">Boletos Deseados:</label>
              <input
                type="number"
                name="cant-boletos"
                min="0"
                max="100"
                placeholder="0"
                id="pase_completo"
              />
            </div>
          </div>
        </div>
        <div id="eventos" class="eventos clearfix">
          <h3>Elige tus talleres</h3>
          <div class="contenedor aux-eventos">
            <div id="viernes" class="contenido-dia clearfix">
              <h4>Viernes</h4>
              <div class="cont-dia">
              <div>
                <p>Talleres:</p>
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_01"
                    value="taller_01"
                  /><time>10:00</time> Responsive Web Design</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_02"
                    value="taller_02"
                  /><time>12:00</time> Flexbox</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_03"
                    value="taller_03"
                  /><time>14:00</time> HTML5 y CSS3</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_04"
                    value="taller_04"
                  /><time>17:00</time> Drupal js</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_05"
                    value="taller_05"
                  /><time>19:00</time> WordPress web master</label
                >
              </div>
              <div>
                <p>Conferencias:</p>
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="conf_01"
                    value="conf_01"
                  /><time>10:00</time> Como ser Freelancer</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="conf_02"
                    value="conf_02"
                  /><time>17:00</time> Tecnologías del Futuro</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="conf_03"
                    value="conf_03"
                  /><time>19:00</time> Seguridad en la Web</label
                >
              </div>
              <div>
                <p>Seminarios:</p>
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="sem_01"
                    value="sem_01"
                  /><time>10:00</time> Diseño UI y UX para móviles</label
                >
              </div>
            </div>
            </div>
            <!--#viernes-->
            <div id="sabado" class="contenido-dia clearfix">
              <h4>Sábado</h4>
              <div class="cont-dia">
              <div>
                <p>Talleres:</p>
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_06"
                    value="taller_06"
                  /><time>10:00</time> AngularJS</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_07"
                    value="taller_07"
                  /><time>12:00</time> PHP y MySQL</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_08"
                    value="taller_08"
                  /><time>14:00</time> JavaScript Avanzado</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_09"
                    value="taller_09"
                  /><time>17:00</time> SEO en Google</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_10"
                    value="taller_10"
                  /><time>19:00</time> De Photoshop a HTML5 y CSS3</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_11"
                    value="taller_11"
                  /><time>21:00</time> PHP Medio y Avanzado</label
                >
              </div>
              <div>
                <p>Conferencias:</p>
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="conf_04"
                    value="conf_04"
                  /><time>10:00</time> Como crear una tienda online que venda
                  millones en pocos días</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="conf_05"
                    value="conf_05"
                  /><time>17:00</time> Los mejores lugares para encontrar
                  trabajo</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="conf_06"
                    value="conf_06"
                  /><time>19:00</time> Pasos para crear un negocio
                  rentable</label
                >
              </div>
              <div>
                <p>Seminarios:</p>
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="sem_02"
                    value="sem_02"
                  /><time>10:00</time> Aprende a Programar en una mañana</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="sem_03"
                    value="sem_03"
                  /><time>17:00</time> Diseño UI y UX para móviles</label
                >
              </div>
            </div>
            </div>
            <!--#sabado-->
            <div id="domingo" class="contenido-dia clearfix">
              <h4>Domingo</h4>
              <div class="cont-dia  ">
              <div>
                <p>Talleres:</p>
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_12"
                    value="taller_12"
                  /><time>10:00</time> Laravel</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_13"
                    value="taller_13"
                  /><time>12:00</time> Crea tu propia API</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_14"
                    value="taller_14"
                  /><time>14:00</time> JavaScript y jQuery</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_15"
                    value="taller_15"
                  /><time>17:00</time> Creando Plantillas para WordPress</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="taller_16"
                    value="taller_16"
                  /><time>19:00</time> Tiendas Virtuales en Magento</label
                >
              </div>
              <div>
                <p>Conferencias:</p>
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="conf_07"
                    value="conf_07"
                  /><time>10:00</time> Como hacer Marketing en línea</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="conf_08"
                    value="conf_08"
                  /><time>17:00</time> ¿Con que lenguaje debo empezar?</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="conf_09"
                    value="conf_09"
                  /><time>19:00</time> Frameworks y librerias Open Source</label
                >
              </div>
              <div>
                <p>Seminarios:</p>
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="sem_04"
                    value="sem_04"
                  /><time>14:00</time> Creando una App en Android en una
                  tarde</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="registro[]"
                    id="sem_05"
                    value="sem_05"
                  /><time>17:00</time> Creando una App en iOS en una
                  tarde</label
                >
              </div>
            </div>
            </div>
            <!--#domingo-->
          </div>
          <!--.caja-->
        </div>
        <div id="pagos" class="pagos contenedor">
          <h3>pagos y extras</h3>
          <div class="cont-pagos">
            <div class="camisas">
                <label for="cant-camisas">Camisa del evento $20.000</label>
                <input type="number" name="cant-camisas" id="cant-camisas" min="0" max="150" placeholder="0">
                <label for="etiquetas">Paquete de etiquetas (contienen 10) $5.000</label>
                <input type="number" name="etiquetas" id="etiquetas" min="0" max="150" placeholder="0">
                <label for="regalo">Selecciona un regalo</label>
                <select id="regalo" name="regalo">
                  <option value="">-Selecciona un regalo-</option>
                  <option value="Camisa">Camisa</option>
                  <option value="Gorra">Gorra</option>
                  <option value="Pulsera">Pulsera</option>
                </select>
                <input type="button" value="CALCULAR" class="button" id="calcular">
            </div>
            <div class="total">
              <p>Resumen Pedido:</p>
              <div id="resumen"></div>
              <p>Total:</p>
              <div id="total"></div>
              <input type="submit" value="PAGAR" class="button" id="btnRegistro">
            </div>
          </div>
        </div>
      </form>
    </section>
    <!--#eventos-->
    <footer class="site-footer">
      <div class="contenedor footer">
        <div class="item-footer">
          <h3>Sobre<span class="span-color"> WebEventos</span></h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, dicta
            repudiandae nobis necessitatibus at cumque aliquam rerum quia et
            veritatis eos commodi voluptatem suscipit atque fugit mollitia!
            Harum, sequi adipisci.
          </p>
        </div>
        <div class="item-footer">
          <h3>últimos<span class="span-color"> tweets</span></h3>
          <p>
            Lorem ipsum dolor sit, amet
            <span class="span-color">consectetur</span> adipisicing elit. Quo,
            dicta repudiandae nobis.
          </p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo,
            <span class="span-color">dicta</span> repudiandae nobis.
          </p>
          <p>
            Lorem <span class="span-color">ipsum</span> dolor sit, amet
            consectetur adipisicing elit. Quo, dicta repudiandae nobis.
          </p>
        </div>
        <div class="item-footer redes">
          <h3>redes<span class="span-color"> sociales</span></h3>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-youtube"></i></a>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <p class="desarrollado">
        desarrollado por <span class="span-color">juan Echenique</span> A.K.A
        <span class="span-color">Deios</span>
      </p>
    </footer>
    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="js/vendor/jquery-3.4.1.min.js"><\/script>'
        );
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
      window.ga = function () {
        ga.q.push(arguments);
      };
      ga.q = [];
      ga.l = +new Date();
      ga("create", "UA-XXXXX-Y", "auto");
      ga("set", "transport", "beacon");
      ga("send", "pageview");
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
  </body>
</html>
