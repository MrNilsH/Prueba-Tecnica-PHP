<!-- 
* Copyright 2018 Carlos Eduardo Alfaro Orellana
  https://www.youtube.com/c/CarlosAlfaro007
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cafeteria | Productos</title>
	
	<?php include('layout/styles.php'); ?>

</head>
<body>

<?php session_start(); ?>
<!-- navLateral -->
<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> Cafeteria 
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
				<figcaption>
					<span><?php echo $_SESSION['nombre']; ?> <br><small>Admin</small></span>
				</figcaption>
			</figure>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="home.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr">
								INICIO
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="productos.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-washing-machine"></i>
							</div>
							<div class="navLateral-body-cr">
								PRODUCTOS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="ventas.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							<div class="navLateral-body-cr">
								VENTAS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="inventario.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-store"></i>
							</div>
							<div class="navLateral-body-cr">
								INVENTARIO
							</div>
						</a>
					</li>
                    <li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../controller/session/logout.php" class="full-width">
							<div class="navLateral-body-cl">
							<i class="zmdi zmdi-power"></i>
							</div>
							<div class="navLateral-body-cr">
								CERRAR
							</div>
						</a>
					</li>
					
				</ul>
			</nav>
		</div>
	</section>
    
	<!-- pageContent -->
	<section class="full-width pageContent">
		<!-- navBar -->
		<div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	
				<div class="mdl-tooltip" for="btn-menu">Hide / Show MENU</div>
			</div>
		</div>

        
        <section class="full-width" style="padding: 40px 0;">
            <div style="background-color: #ececec; margin: 25px; padding:20px; border-radius: 20px;"><i class="zmdi zmdi-washing-machine"></i><b> PRODUCTOS</b> </div>
        </section>

        
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                
                <div class="full-width" style="padding: 30px 0; margin: 25px;">
                    <table class="table text-center" id="dataT">
                        <thead>
                            <tr class="text-center">
                                <th>Nombre Producto</th>
                                <th>Referencia</th>
                                <th>Precio</th>
                                <th>Peso</th>
                                <th>Categoria</th>
                                <th>Stock</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                                <td>$0.87</td>
                                <td></td>
                            </tr>
                            
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
	
	</section>

	
	<?php include('layout/scripts.php'); ?>

    <script>

        $(document).ready( function () {
            $('#dataT').DataTable();
        } );

    </script>


</body>
</html>