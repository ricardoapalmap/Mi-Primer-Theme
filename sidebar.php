<aside class="sidebar col-md-4">
			<div class="widget redes-sociales">
				<div class="titulo-seccion">
					<h3>Síguenos</h3>
				</div>
				<div class="redes-sociales">
					<a class="youtube" href="https://www.youtube.com/@ricardoapalmap"><i class="icono fa fa-youtube-play"></i>
						<span class="seguidores">90K</span></a>
					<a class="facebook" href="https://web.facebook.com/ricardoapalmap/"><i class="icono fa fa-facebook"></i>
						<span class="seguidores">6K</span></a>
					<a class="twitter" href="https://twitter.com/ricardoapalmap"><i class="icono fa fa-twitter"></i>
						<span class="seguidores">3.5K</span></a>
				</div>
			</div>

			<div class="widget boletin">
				<div class="titulo-seccion">
					<h3>Suscríbete</h3>
					<form class="formulario" action="">
						<label for="email">Suscríbete a nuestro boletín</label>
						<input type="email" id="email" placeholder="Correo Electronico" required>
						<input type="submit" value="Enviar">
					</form>
				</div>
			</div>

			<?php if ( !function_exists('dynamic_sidebar') OR !dynamic_sidebar('Sidebar') ) : endif; ?>
</aside>