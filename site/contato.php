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
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.492566693366!2d-55.535032684694556!3d-30.900853278596564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a9fe5efe99ce3f%3A0x6ac41211a41a9d12!2sIFSul+-+C%C3%A2mpus+Sant&#39;Ana+do+Livramento!5e0!3m2!1spt-BR!2sbr!4v1543961980395" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</figure>
							</div>
						</div>
						
						<div class="clear"></div>
						<div class="grid_12">
							<?php foreach($resul as $local){	
							echo("
							<div class='grid_3'>
								<h3>Contato</h3>
								Telefone: $local->contato<br>
								Endreço: $local->Endereco<br>
								E-mail: $local->Email
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

							<?php foreach($resultado as $local){	
						echo("
						<div class='grid_3' style='margin-top: -20% !important; margin-left:5% !important'>
							<h3>Agenda de onde estarei</h3>
							Pessoa Responsável: $local->Id_admin<br>
							Data: $local->data<br>
							Evento: $local->Evento
						</div>");}?>
				</div>
			</section>
<?php
 include_once("../web/rodape.php");
?>