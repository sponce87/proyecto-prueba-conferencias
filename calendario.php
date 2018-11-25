<?PHP include_once 'includes/templates/header.php';?>
	<section class="seccion contenedor">
		<h2>Calendario de eventos</h2>

		<?PHP
			try {
				require_once 'includes/funciones/bd_conexion.php';
				$sql="SELECT id_evento,nombre_evento,fecha_evento,hora_evento,cat_evento,icono,nombre_invitado,apellido_invitado ";
				$sql.="FROM eventos ";
				$sql.="LEFT JOIN categoria_evento ";
				$sql.="ON (eventos.id_cat_evento=categoria_evento.id_categoria) ";
				$sql.="LEFT JOIN invitados ";
				$sql.="ON (eventos.id_inv=invitados.id_invitado) ";
				$sql.="ORDER BY id_evento";
				$resultado= $conn->query($sql);
			} catch (Exception $exception) {
				echo $exception->getMessage();
			}
		?>
		<div class="calendario">
			<?PHP
			$calendario=array();
			while ($eventos=$resultado->fetch_assoc()) {
				//agrupamos los eventos por fecha
				$fecha  = $eventos['fecha_evento'];
				$evento = array(
					'titulo'    => $eventos['nombre_evento'],
					'fecha'     => $eventos['fecha_evento'],
					'hora'      => $eventos['hora_evento'],
					'categoria' => $eventos['cat_evento'],
					'icono'     => "fa ".$eventos['icono'],
					'invitado'  => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado'],
				);
				//para cada fecha se crea un nuevo valor
				$calendario[ $fecha ][] = $evento;
			} ?>

			<?PHP
				//imprime los eventos
				foreach($calendario as $dia=>$lista_eventos):;?>
				<h3>
					<i class="fa fa-calendar"></i>
					<?PHP
					//unix
					setlocale(LC_TIME,"es_ES.UTF-8");
					//windows
					//setlocale(LC_TIME,"spanish");

					echo strftime("%A, %d de %B del %Y", strtotime($dia));?>
				</h3>
				<?PHP foreach($lista_eventos as $evento): ?>
					<div class="dia">
						<p class="titulo"><?PHP echo $evento['titulo']; ?></p>
						<p class="hora">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<?PHP echo $evento['fecha']." ".$evento['hora']; ?>
						</p>
						<p class="categoria">
							<i class="<?PHP echo $evento['icono']?>" aria-hidden="true"></i>
							<?PHP echo $evento['categoria']; ?></p>
						<p class="invitado">
							<i class="fa fa-user" aria-hidden="true"></i>
							<?PHP echo $evento['invitado'];?>
						</p>
					</div>

				<?PHP endforeach; ?>
			<?PHP endforeach;?>

		</div>
		<?PHP $conn->close(); ?>

	</section>
<?PHP include_once 'includes/templates/footer.php';?>