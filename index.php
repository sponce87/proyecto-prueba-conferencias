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
            <?PHP
                  try {
                    require_once 'includes/funciones/bd_conexion.php';
                    $sql="SELECT * FROM categoria_evento";
                    $resultado= $conn->query($sql);
                  } catch (Exception $exception) {
                    echo $exception->getMessage();
                  }
		          ?>

            <nav class="menu-programa">
              <?php while($cat=$resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                <?php $categoria=$cat['cat_evento'];?>
                <a href="#<?php echo strtolower($categoria);?>">
                  <i class="fa <?php echo $cat['icono'];?>" aria-hidden="true"></i> <?php echo $categoria; ?>
                </a>
              <?php }?>
            </nav>
                <?PHP
                    try {
                      require_once 'includes/funciones/bd_conexion.php';
                      $sql="SELECT id_evento,nombre_evento,fecha_evento,hora_evento,cat_evento,icono,nombre_invitado,apellido_invitado ";
                      $sql.="FROM eventos ";
                      $sql.="INNER JOIN categoria_evento ";
                      $sql.="ON (eventos.id_cat_evento=categoria_evento.id_categoria) ";
                      $sql.="INNER JOIN invitados ";
                      $sql.="ON (eventos.id_inv=invitados.id_invitado) ";
                      $sql.="AND eventos.id_cat_evento=1 ";
                      $sql.="ORDER BY id_evento LIMIT 2;";
                      $sql.="SELECT id_evento,nombre_evento,fecha_evento,hora_evento,cat_evento,icono,nombre_invitado,apellido_invitado ";
                      $sql.="FROM eventos ";
                      $sql.="INNER JOIN categoria_evento ";
                      $sql.="ON (eventos.id_cat_evento=categoria_evento.id_categoria) ";
                      $sql.="INNER JOIN invitados ";
                      $sql.="ON (eventos.id_inv=invitados.id_invitado) ";
                      $sql.="AND eventos.id_cat_evento=2 ";
                      $sql.="ORDER BY id_evento LIMIT 2;";
                      $sql.="SELECT id_evento,nombre_evento,fecha_evento,hora_evento,cat_evento,icono,nombre_invitado,apellido_invitado ";
                      $sql.="FROM eventos ";
                      $sql.="INNER JOIN categoria_evento ";
                      $sql.="ON (eventos.id_cat_evento=categoria_evento.id_categoria) ";
                      $sql.="INNER JOIN invitados ";
                      $sql.="ON (eventos.id_inv=invitados.id_invitado) ";
                      $sql.="AND eventos.id_cat_evento=3 ";
                      $sql.="ORDER BY id_evento LIMIT 2;";
                      
                    } catch (Exception $exception) {
                      echo $exception->getMessage();
                    }
                ?>
                <?php $conn->multi_query($sql); ?>
                <?php 
                  do {
                      $resultado=$conn->store_result();
                      $row=$resultado->fetch_all(MYSQLI_ASSOC); ?>
                      <?php $i=0; ?>
                      <?php foreach($row as $evento): ?>
                      <?php if($i%2==0) { ?>
                      <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso ocultar clearfix" >
                      <?php } ?>
                          <div class="detalles-evento">
                            <h3><?php echo $evento['nombre_evento']; ?></h3>
                            <p><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $evento['hora_evento']; ?></p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento']; ?></p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_evento']; ?></p>
                          </div>
                          <?php if($i%2==1): ?>
                            <a href="#" class="button float-right">Ver todos</a>  
                            </div><!--talleres--> 
                          <?php endif; ?>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                      <?php $resultado->free(); ?>                    
                <?php  } while ($conn->more_results() && $conn->next_result());
                ?>
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