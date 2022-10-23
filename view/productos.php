
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cafeteria | Productos</title>
	
	<?php include('layout/styles.php'); ?>
	<style>
		th{
			border-right: 2px solid #fff;
		}

	</style>

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
            <div style="background-color: #fcfcfc; margin: 25px; padding:20px; border-left: 10px solid #ececec;  border-bottom: 2px solid #ececec;">
				<h5><i class="zmdi zmdi-washing-machine" style="font-size: 2rem;"></i><b> PRODUCTOS</b></h5>
			</div>
        </section>

        
        <div class="mdl-grid m-4" style="background-color: #fcfcfc; border-radius:8px; border-top: 2px solid #ececec;  border-bottom: 2px solid #ececec;">
            <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                
                <div style="padding: 10px 0; margin: 25px;">
                    <table class="table table-sm text-center" id="dataT">
                        <thead style="background-color: #153145; color: #fff;">
                            <tr>
                                <th>Nombre Producto</th>
                                <th>Referencia</th>
                                <th>Precio</th>
                                <th>Peso</th>
                                <th>Categoria</th>
                                <th>Stock</th>
                                <th>Fecha Registro</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

		<div class="modal fade" id="actualizarProducto" tabindex="-1" role="dialog">
  			<div class="modal-dialog" role="document">
    			
				<form action="" method="">
					<div class="modal-content">
		
						<div class="modal-body">

						<h5 class="m-3"><i class='zmdi zmdi-edit' style='font-size:20px;'></i> Actualizar Producto </h5>
						<hr>

							<section class="full-width ml-4 mt-4" >
								
							<input type="hidden" id="id" name="id" class="form-control form-control-sm">

								<div class="form-group row">
									<label for="email_address" class="col-md-4 col-form-label text-md-left">Producto</label>
									<div class="col-md-6">
										<input type="text" id="nombre_producto" class="form-control form-control-sm" name="email-nombre_producto" required autofocus>
									</div>
								</div>

								<div class="form-group row">
									<label for="referencia" class="col-md-4 col-form-label text-md-left">Referencia</label>
									<div class="col-md-6">
										<input type="text" id="referencia" name="referencia"  class="form-control form-control-sm"required>
									</div>
								</div>

								<div class="form-group row">
									<label for="precio" class="col-md-4 col-form-label text-md-left">Precio</label>
									<div class="col-md-6">
										<input type="text" id="precio" name="precio" class="form-control form-control-sm"required>
									</div>
								</div>

								<div class="form-group row">
									<label for="peso" class="col-md-4 col-form-label text-md-left">Peso</label>
									<div class="col-md-6">
										<input type="text" id="peso" name="peso" class="form-control form-control-sm" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="categoria" class="col-md-4 col-form-label text-md-left">Categoria</label>
									<div class="col-md-6">
										<select  class="form-control form-control-sm" name="categoria" id="categoria">
											<option value="0" selected>Seleccionar</option>
											<?php foreach ($listarCategorias as $lcp) { ?>
												<option value="<?php echo $lcp['id'] ?>"><?php echo $lcp['nombre_categorias']; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label for="stock" class="col-md-4 col-form-label text-md-left">Stock del producto</label>
									<div class="col-md-6">
										<input type="text" id="stock" name="stock" class="form-control form-control-sm" required>
									</div>
								</div>

							</section>

						</div>

						<div class="modal-footer d-flex justify-content-center">
							<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
							<button type="button" class="btn btn-outline-primary">Actualizar</button>
						</div>

					</div>
				</form>

			</div>
		</div>
	
	</section>

	

	
	<?php include('layout/scripts.php'); ?>

    <script>

		$(document).ready(function () {
			var table = $('#dataT').DataTable({
				"ajax": {
					"url": '../controller/productosJSON.php'
				},
				"columns": [
					{ "data": 'nombre_producto' },
					{ "data": 'referencia' },
					{ "data": 'precio' },
					{ "data": 'peso' },
					{ "data": 'nombre_categoria' },
					{ "data": 'stock' },
					{ "data": 'fecha_creacion' },
					{ "defaultContent": "<button class='btn btn-sm btn-outline-primary btn-circle mr-2' id='buttonUpdate' return true;'><i class='zmdi zmdi-edit' style='font-size:15px;'></i></button><button class='btn btn-sm btn-outline-danger btn-circle'><i class='zmdi zmdi-delete' style='font-size:15px;'></i></button>" },
				],
			});

			obtener_data_actualizar("#dataT tbody", table);
		});

		const obtener_data_actualizar = function(tbody, table){
			$(tbody).on('click', "button#buttonUpdate", function(){
				const data = table.row($(this).parents("tr")).data();
				console.log(data);

				$("#actualizarProducto").modal("show");

				const idProd = $("#id").val(data.id),
					nombreProducto = $("#nombre_producto").val(data.nombre_producto),
					referencia = $("#referencia").val(data.referencia),
					precio = $("#precio").val(data.precio),
					peso = $("#peso").val(data.peso),
					categoria = $("#categoria").val(data.nombre_categoria).prop("selected", true),
					stock = $("#stock").val(data.stock);

			})
		}

    </script>


</body>
</html>