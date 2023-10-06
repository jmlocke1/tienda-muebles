<?php 
$titulo = "Blog";
include "templates/header.php"; 
?>

	<main class="contenido-principal contenedor">
		<h2 class="text-center">Nuestro Blog</h2>

		<section class="contenedor-blog">
			<div class="blog">
				<article class="entrada">
					<h2>Guía de Colores</h2>
					<div class="imagen">
						<img src="img/nosotros.jpg" alt="Imagen Blog">
					</div>
					<div class="contenido-blog">
						<div class="entrada-meta">
							<p>Fecha: <span>22 de Octubre de 2023</span> </p>
							<p>Escrito por: <span>TiendaMuebles</span></p>
						</div>

						<div class="entrada-blog">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit repudiandae, magni dolorum illo quis iste quaerat iure est totam hic facilis! Ut aliquid est provident iste veritatis distinctio eius animi.</p>
							<p>Quo error quia eveniet illum, labore repudiandae consectetur, reiciendis at pariatur odio rerum, exercitationem sint voluptate nam officia mollitia. Exercitationem incidunt, odit dignissimos voluptate quod veniam qui dolore et labore in ratione libero saepe rerum repudiandae. Dolore, eligendi officia nisi odio doloribus sequi dolores earum deleniti doloremque? Vero.</p>
						</div>

						<a href="entrada.php" class="btn max-width-30">Leer</a>
					</div>
				</article>

				<article class="entrada">
					<h2>Guía de Colores</h2>
					<div class="imagen">
						<img src="img/nosotros.jpg" alt="Imagen Blog">
					</div>
					
					<div class="contenido-blog">
						<div class="entrada-meta">
							<p>Fecha: <span>22 de Octubre de 2023</span> </p>
							<p>Escrito por: <span>TiendaMuebles</span></p>
						</div>
						<div class="entrada-blog">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit repudiandae, magni dolorum illo quis iste quaerat iure est totam hic facilis! Ut aliquid est provident iste veritatis distinctio eius animi.</p>
							<p>Quo error quia eveniet illum, labore repudiandae consectetur, reiciendis at pariatur odio rerum, exercitationem sint voluptate nam officia mollitia. Exercitationem incidunt, odit dignissimos voluptate quod veniam qui dolore et labore in ratione libero saepe rerum repudiandae. Dolore, eligendi officia nisi odio doloribus sequi dolores earum deleniti doloremque? Vero.</p>
						</div>

						<a href="entrada.php" class="btn max-width-30">Leer</a>
					</div>
				</article>
			</div>
			<aside>
				<h3>Otras Entradas de Blog</h3>

				<ul>
					<li><a href="entrada.php">Guía de Colores</a></li>
					<li><a href="entrada.php">Nuevos Modelos</a></li>
					<li><a href="entrada.php">Guía para diseño de interiores</a></li>
					<li><a href="entrada.php">Guía para diseño de exteriores</a></li>
				</ul>
			</aside>
		</section>

		
	</main>
	
<?php include "templates/footer.php"; ?>