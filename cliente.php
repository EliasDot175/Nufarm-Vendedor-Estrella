<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Nufarm - Vendedor Estrella</title>

		<!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- CSS de Bootstrap -->
		<link href="assets/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/bootstrap-3.3.4/css/bootstrap-social.css" rel="stylesheet" media="screen">

		<!-- CSS de font-awesome-4.3.0 para iconos sociales-->
		<link href="assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" media="screen">
		
		<!-- Librería jS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="assets/bootstrap-3.3.4/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="assets/js/eventos.js"></script>
		<script src="assets/js/jquery.canvasjs.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(".chartContainer").CanvasJSChart({
					title: {
						text: "Monthly Rainfall in Columbus - 1996"
					},
					axisY: {
						title: "Rainfall in mm",
						includeZero: false
					},
					axisX: {
						interval: 1
					},
					data: [
					{
						type: "line", //try changing to column, area
						toolTipContent: "{label}: {y} mm",
						dataPoints: [
							{ label: "Jan",  y: 5.28 },
							{ label: "Feb",  y: 3.83 },
							{ label: "March",y: 6.55 },
							{ label: "April",y: 4.81 },
							{ label: "May",  y: 2.37 },
							{ label: "June", y: 2.33 },
							{ label: "July", y: 3.06 },
							{ label: "Aug",  y: 2.94 },
							{ label: "Sep",  y: 5.41 },
							{ label: "Oct",  y: 2.17 },
							{ label: "Nov",  y: 2.17 },
							{ label: "Dec",  y: 2.80 }
						]
					}
					]
				});
			});
		</script>
		
		<!-- CSS -->
		<link href="assets/css/estilos.css?v=01" rel="stylesheet" media="screen">
	</head>
	<body>

		<div class="head">
			<div class="contenedor">
             	<img src="assets/images/Nufarm-max-logo.png" id="Nufarm" title="Nufarm" alt="Imagen no encontrada">
				<div class="block">
					<img class="icon-select " src="assets/images/flecha-select.png" id="Nufarm" title="Nufarm" alt="Imagen no encontrada">
					<select class="form-control">
						<option>MARKETING NET</option>
						<option>PLAN DE NEGOCIOS</option>
						<option>VENDEDOR ESTRELLA</option>
					</select>
					<div class="logout">
						<p class="text-uppercase">salir</p>
						<img src="assets/images/cerrar.png" id="Nufarm" title="Nufarm" alt="Imagen no encontrada">
					</div>
				</div>
         	</div>
      	</div>


		<!-- CONTENEDOR GENERAL***********************************************************-->
		<div class="contenedor ">

			<!--base-->
			<div class="base">

				<!-- head -->
				<div class=" head-cliente col-xs-12">
					<h3 class="titulo-A">FACTURACIÓN</h3>
					<select name="">   
                		<option value="">FACTURACION 2014/ 2015</option>   
		           	</select>  
				</div>
				<!-- end / head -->

				<!--contenido-->
				<div class="contenido col-xs-12">

					<!--Cliente -->
					<div class="admin col-xs-12">
						<!-- contenedor B -->
						<div class="contenedor-B col-xs-12">
							
								<h3 class="titulo-B">SANCHEZ AGRONEGOCIOS S.A.</h3> 

								<div class="block-resumen-A">
									<div class="block-resumen col-xs-12 col-sm-3">
										<div class="num">212.769</div>
										<hr class="hr-resumen"> 
										 <div class="text">
											Facturación total
										</div>
									</div>

									<div class="block-resumen col-xs-12 col-sm-3">
										<div class="num">50%</div>
										<hr class="hr-resumen"> 
										 <div class="text">
											Facturación Productos Clave
										</div>
									</div>

									<div class="block-resumen col-xs-12 col-sm-3">
										<div class="num">129%</div>
										<hr class="hr-resumen"> 
										 <div class="text">
											Avance Productos Clave
										</div>
									</div>

									<div class="block-resumen col-xs-12 col-sm-3">
										<div class="num">2</div>
										<hr class="hr-resumen"> 
										 <div class="text">
											Accede a categoría
										</div>
									</div>
								</div>


								<!-- Gráfico -->
								<div class="chartContainer col-xs-12" style="height: 400px;">

								</div>
								<!-- end / Gráfico -->

								<hr class="hr-cliente">

								<!-- categoria -->
								<div class="categorias col-xs-12">
									<div class="item col-xs-3">
										<p class="num">0</p>
									</div>
									<div class="item col-xs-3">
										<img class="imagen" src="assets/images/premio.png" alt="">
										<p class="num">1</p>
									</div>
									<div class="item col-xs-3">
										<img class="imagen"  src="assets/images/premio.png" alt="">
										<p class="num activo">2</p>
									</div>
									<div class="item col-xs-3">
										<img class="imagen"  src="assets/images/premio.png" alt="">
										<p class="num">3</p>
									</div>
								</div>
								<!-- end / categoria -->

								<!-- seleccionar -->
								<div class="datos">
									<div class="progressbar col-xs-12">
										<div class="progress">
										  	<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
									    		<span class="sr-only">70% Complete</span>
										  	</div>
										</div>
									</div>

									<div class="seleccionar col-xs-12">
										<p class="text text-uppercase">SELECCIONAR PREMIO CATEGORÍA 2</p>
										<select name="">   
					                    	<option value="">TABLET</option>   
					                    	<option value="">TV LED</option>   
							           	</select>
							          	<img class="ok-seleccion" src="assets/images/ok.png" alt="">
									</div>
								</div>
								<!-- end / seleccionar -->


								<!-- meses -->
								<div class="inputs col-xs-12">

									<div class="titulo-meses col-xs-12">
										<h3 class="item item-a">2014</h3>
										<h3 class="item item-b">2015</h3>
									</div>
									
				    					<!-- Tabla -->
									<table class="tabla-A tabla-mes" >
										<thead>
											<tr>
												<th class="text-uppercase col-mes">Agosto</th>
												<th class="text-uppercase col-mes">Septiembre</th>
												<th class="text-uppercase col-mes">Octubre</th>
												<th class="text-uppercase col-mes">Noviembre</th>
												<th class="text-uppercase col-mes">Diciembre</th>
												<th class="text-uppercase col-mes">Enero</th>
												<th class="text-uppercase col-mes">Febrero</th>
												<th class="text-uppercase col-mes">Marzo</th>
											</tr>
										</thead>
										<tbody>

											<!-- item-->
											<tr>
												<td class="background-A text-uppercase center">
													10.789
												</td>
												<td class="background-A text-uppercase col-mes center ">
													30.100
												</td>
												<td class="background-A text-uppercase col-mes center">
													50.789
												</td>
												<td class="background-B text-uppercase col-mes center">
													20.889
												</td>
												<td class="background-B text-uppercase col-mes center ">
													10.000
												</td>
												<td class="background-A text-uppercase col-mes center ">
													51.000
												</td>
												<td class="background-A text-uppercase col-mes center" >
													40.020
												</td>
												<td class="background-A text-uppercase col-mes center">
													100.789
												</td>
												
											</tr>
											<!-- end / item-->

										</tbody>
									</table>
									<!-- end / Tabla -->
								</div>
								<!-- end / meses -->
						</div>
						<!-- end / contenedor B -->


					</div>
					<!-- end / Cliente -->

					<!--footer-->
					<div class="sub-footer col-xs-12">
					
					</div>
					<!--end / footer-->
				</div>
				<!--end / contenido-->

			</div>
			<!--end / base-->

		</div>
		<!-- // CONTENEDOR GENERAL*********************************************-->

		<div class="footer" style="position: relative;">
            <img src="assets/images/Nufarm-max-logo-verde.png" id="Nufarm" title="Nufarm" alt="Imagen no encontrada">
         </div>

	</body>
</html>