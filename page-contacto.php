<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="container">
      <!-- Example row of columns -->
      <div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="panel">
					<div class="panel-heading">
						<h3><i class="icon-map-marker main-color"></i> Contacto </h3>
					</div>
					
				  </div>
			</div>
		</div>
	<hr>
	<div class="row">
			<div class="col-sm-4 col-lg-4">
				<div class="panel">
					<div class="panel-heading">
						<h3><i class="icon-pushpin main-color"></i> Dirección </h3>
					</div>
					<div class="panel-body">
						<address>
						<strong> SC Computación. </strong><br>
						Aquiles Serdán 1102 Ote, Fracc. del Lago, <br>
						Durango, Dgo. c.p. 34080 <br>
						<i class="icon-phone-sign"></i> + 52 (618) 455-3000 <br>
                        <i class="icon-phone-sign"></i> + 52 (618) 455-3006 <br>
                        <i class="icon-phone-sign"></i> + 52 (618) 818-0411 <br>
						</address>
					</div>
				</div>
			
			<div class="panel">
				<div class="panel-heading">
				  <h3><i class="icon-time main-color"></i> Horario </h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
					  <thead>
						<tr>
						  
						  <th>Dia</th>
						  <th>Hora</th>
						</tr>
					  </thead>
					  <tbody>
						<tr class="success">
						  <td> Lunes a Viernes </td>
						  <td> 10 am a 8 pm </td>
						</tr>
						<tr class="success">
						  <td> Sábado </td>
						  <td> 10 am a 3 pm </td>
						</tr>
						
					  </tbody>
					</table>
					</div>
				</div>
			</div>
       <div class="col-12 col-lg-8">
	  
			<div class="panel">
					<div class="panel-heading">	
			<h3 class="">
				<i class="icon-envelope main-color"></i>
				Contactanos
			</h3>
			</div>
			<div class="panel-body">
			<!-- CONTACT FORM -->
			<form id="ajax-contacts" class="">
				<fieldset>
					<div class="form-group">
						<label for="name">Nombre</label><input class="form-control" type="text" name="name" value="">
					</div>
					<div class="form-group">
						<label for="email">E-Mail</label><input class="form-control" type="text" name="email" value=""><br>
					</div>
					<div class="form-group">
						<label for="subject">Asunto</label><input class="form-control" type="text" name="subject" value=""><br>
					</div>
					<div class="form-group">
						<label for="message">Comentarios</label><textarea class="form-control" name="message" rows="5" cols="25"></textarea><br>
					</div>
					<div class="form-group">
						<label for="submit">&nbsp;</label><input class="btn btn-lg btn-info" type="submit" name="submit" value="Enviar">
					</div>
				<fieldset>
			
			<!-- END CONTACT FORM -->
			</fieldset></fieldset></form></div>
			</div>			
		</div>
      </div>

    </div>

    </main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>