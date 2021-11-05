<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Usuario</h1>
			</div>

			<div class="articulo">
				<article>
				<form action="/action_page.php" method="get">
                <label for="nombre">Nombres:</label>
                <input type="text" id="nombre" name="nombre"><br><br>
                <label for="apellido">Apellidos:</label>
                <input type="text" id="apellido" name="apellido"><br><br>
				<label for="gmail">Correo:</label>
                <input type="text" id="gmail" name="gmail"><br><br>
				<label for="contraseña">Contraseña:</label>
                <input type="text" id="contraseña" name="contraseña"><br><br>
				<label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono"><br><br>
				<label for="direccion">Direccion:</label>
                <input type="text" id="direccion" name="direccion"><br><br>
                <input type="submit" value="Submit">
            </form>
				</article>
			</div>
			<?php include("sidebar.php"); ?>
			
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>