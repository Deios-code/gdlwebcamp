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
  <script src="js/pushbar.js"></script>
  <script type="text/javascript">
    const pushbar = new Pushbar({
          blur:true,
          overlay:true,
        });
        	
  </script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="js/vendor/jquery-3.4.1.min.js"><\/script>'
        );
    </script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php","",$archivo);
      if($pagina == 'invitado' || $pagina == 'index'){
        echo '<script src="js/jquery.colorbox-min.js"></script>';
      } else if($pagina == 'conferencia'){
        echo '<script src="js/lightbox.js"></script>';
      }
    ?>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
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
