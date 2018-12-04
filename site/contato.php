<?php
include_once("../class/Carregar.class.php");
 include_once("../web/topo.php");
 
 $obj = New Contato();
	$resul = $obj->listar();
	
		$objagenda = New Agenda();
	$resultado = $objagenda->listar();
?>
		<div class="main">
<!--=====================Content======================-->
			<section class="content">
				<div class="container"><div class="ic">More Website Templates @ TemplateMonster.com - May 05, 2014!</div>
					<div class="row">
						<div class="grid_12">
							<div class="map">
								<figure>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
								</figure>
							</div>
						</div>
						<div class="clear"></div>
						<?php foreach($resul as $local){	
						echo("
						<div class='grid_3'>
							<h3>Contato</h3>
							Telefone: $local->contato<br>
							Endreço: $local->Endereco<br>
							E-mail: $local->Email
						</div>");}?>
								<?php foreach($resultado as $local){	
						echo("
						<div class='grid_3'>
							<h3>Agenda de onde estarei</h3>
							Pessoa Responsável: $local->Id_admin<br>
							Data: $local->data<br>
							Evento: $local->Evento
						</div>");}?>
						<div class="grid_6 preffix_1">
							<h3>Contact Form</h3>
							<form id="form" action="../web/bat/MailHandler.php">
								<div class="success_wrapper">
									<div class="success-message">Contact form submitted</div>
								</div>
								<label class="name">
									<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid name.</span>
								</label>
								<label class="email">
									<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid email.</span>
								</label>
								<label class="phone">
									<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid phone.</span>
								</label>
								<label class="message">
									<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*The message is too short.</span>
								</label>
								<div>
									<div class="clear"></div>
									<div class="btns">										
										<input type="submit"></input>
									</div>
								</div>
							</form>
						</div>
					
				
					</div>
				</div>
			</section>
<?php
 include_once("../web/rodape.php");
?>