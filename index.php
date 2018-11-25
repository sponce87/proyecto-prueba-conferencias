<?PHP include_once 'includes/templates/header.php';?>

    <section class="seccion contenedor">
      <h2>La mejor conferencia de diseno web en espanol</h2>
      <p>
        Sed eget accumsan leo. Nunc varius porta quam, vel interdum nunc lobortis fermentum. Etiam tincidunt est suscipit ante rutrum, in tristique nunc aliquam. Curabitur interdum tellus quam, sed imperdiet tortor vehicula non. Vestibulum non tempus odio. Phasellus ut leo lacus. Donec eget porttitor nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc sollicitudin justo id libero faucibus vulputate. 
      </p>
    </section>
    <section class="programa">
      <div class="contenedor-video">
        <video  autoplay loop poster="img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogv">

        </video>
      </div><!--contenedor-video-->
      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i> Talleres</a>
              <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i> Conferencias</a>
              <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i> Seminarios</a>
            </nav>
            <div id="talleres" class="info-curso ocultar clearfix" >
                <div class="detalles-evento">
                  <h3>HTML5, CSS3, Javascript</h3>
                  <p><i class="fa fa-clock" aria-hidden="true"></i> 16:00 hrs</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la Torre</p>
                </div>
                <div class="detalles-evento">
                  <h3>Responsive Web Design</h3>
                  <p><i class="fa fa-clock" aria-hidden="true"></i> 20:00 hrs</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la Torre</p>
                </div>
                <a href="#" class="button float-right">Ver todos</a>
            </div><!--talleres-->
            <div id="conferencias" class="info-curso ocultar clearfix" >
              <div class="detalles-evento">
                <h3>Como ser freelancer</h3>
                <p><i class="fa fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
                <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                <p><i class="fa fa-user" aria-hidden="true"></i> Gregorio Sanchez</p>
              </div>
              <div class="detalles-evento">
                <h3>Tecnologias del futuro</h3>
                <p><i class="fa fa-clock" aria-hidden="true"></i> 18:00 hrs</p>
                <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
          </div><!--talleres-->
          <div id="seminarios" class="info-curso ocultar clearfix" >
            <div class="detalles-evento">
              <h3>Diseno UI/UX para moviles</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 17:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Harold Garcia</p>
            </div>
            <div class="detalles-evento">
              <h3>Aprende a programar en una manana</h3>
              <p><i class="fa fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Susan Rivera</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
        </div><!--talleres-->
          </div><!--programa-eventos-->
        </div><!--contenedor-->
      </div><!--contenido-programa-->
    </section>
    <?PHP include_once 'includes/templates/invitados.php';?>
    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero">0</p> Invitados</li>
          <li><p class="numero">0</p> Talleres</li>
          <li><p class="numero">0</p> Dias</li>
          <li><p class="numero">0</p> Conferencias</li>
        </ul>
      </div>
    </div>
    <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Pase por dia</h3>
              <p class="numero">$30</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Todos los dias</h3>
              <p class="numero">$50</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button">Comprar</a>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Pase por 2 dias</h3>
              <p class="numero">$45</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
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
                <p>Sed eget accumsan leo. Nunc varius porta quam, vel interdum nunc lobortis fermentum. Etiam tincidunt est suscipit ante rutrum, in tristique nunc aliquam.</p>
                 <footer class="info-testimonial clearfix">
                  <img src="img/testimonial.jpg" alt="imagen testimonial">
                  <cite>Oswaldo Aponte Escobedo <span>Disenador en @prisma</span></cite>
                </footer>
              </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Sed eget accumsan leo. Nunc varius porta quam, vel interdum nunc lobortis fermentum. Etiam tincidunt est suscipit ante rutrum, in tristique nunc aliquam.</p>
                  <footer class="info-testimonial clearfix">
                    <img src="img/testimonial.jpg" alt="imagen testimonial">
                    <cite>Oswaldo Aponte Escobedo <span>Disenador en @prisma</span></cite>
                  </footer>
                </blockquote>
              </div>
              <div class="testimonial">
                  <blockquote>
                      <p>Sed eget accumsan leo. Nunc varius porta quam, vel interdum nunc lobortis fermentum. Etiam tincidunt est suscipit ante rutrum, in tristique nunc aliquam.</p>
                    <footer class="info-testimonial clearfix">
                      <img src="img/testimonial.jpg" alt="imagen testimonial">
                      <cite>Oswaldo Aponte Escobedo <span>Disenador en @prisma</span></cite>
                    </footer>
                  </blockquote>
                </div>
      </div>
    </section>
    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Registrate al Newsletter</p>
        <h3>gdlwebcamp</h3>
        <a href="#" class="button transparente">Registro</a>
      </div>
    </div><!--newsletter-->
    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
            <li><p id="dias" class="numero"></p> dias</li>
            <li><p id="horas" class="numero"></p> horas</li>
            <li><p id="minutos" class="numero"></p> minutos</li>
            <li><p id="segundos" class="numero"></p> segundos</li>
        </ul>
      </div>
    </section>
<?PHP include_once 'includes/templates/footer.php';?>