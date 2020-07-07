<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid py-5 d-none d-md-block">
	
	<div class="container">
		
		<div class="row">

		<!-- GRID CATEGORÍAS FOOTER -->
			
			<div class="col-md-7 col-lg-6">
				
				<div class="p-1 bg-white gridFooter">

					<div class="container p-0">

						<div class="d-flex">

							<div class="d-flex flex-column columna1">
							
								<figure class="p-2 m-0 photo1" vinculo="<?php echo $categorias[0]["ruta_categoria"] ?>" style="
								background:url(<?php echo $blog["dominio"].$categorias[0]["img_categoria"] ?>)">
									
									<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[0]["titulo_categoria"]?></p>

								</figure>

								<figure class="p-2 m-0 photo2" vinculo="<?php echo $categorias[4]["ruta_categoria"] ?>" style="
								background:url(<?php echo $blog["dominio"].$categorias[4]["img_categoria"] ?>)">
									
									<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[4]["titulo_categoria"]?></p>

								</figure>								

							</div>

							<div class="d-flex flex-column flex-fill columna2">

								<div class="d-block d-md-flex">

									<figure class="p-2 m-0 flex-fill photo3" vinculo="<?php echo $categorias[1]["ruta_categoria"] ?>" style="
									background:url(<?php echo $blog["dominio"].$categorias[1]["img_categoria"] ?>)">

										<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[1]["titulo_categoria"]?></p>
										
									</figure>

									<figure class="p-2 m-0 flex-fill photo4" vinculo="<?php echo $categorias[3]["ruta_categoria"] ?>"style="
									background:url(<?php echo $blog["dominio"].$categorias[3]["img_categoria"] ?>)">
										
										<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[3]["titulo_categoria"]?></p>

									</figure>

								</div>

								<figure class="p-2 m-0 photo5" vinculo="<?php echo $categorias[2]["ruta_categoria"] ?>"style="
									background:url(<?php echo $blog["dominio"].$categorias[2]["img_categoria"] ?>)">

									<p class="text-uppercase p-1 p-md-2 p-xl-1 small"><?php echo $categorias[2]["titulo_categoria"]?></p>
									
								</figure>

							</div>

						</div>

					</div>

				</div>
					
			</div>

			<div class="d-none d-lg-block col-lg-1 col-xl-2"></div>

			<!-- NEWLETTER -->

			<div class="col-md-5 col-lg-5 col-xl-4 pt-5">
							<!-- Begin Mailchimp Signup Form -->
				<div id="mc_embed_signup">
				<form action="https://funsanmateo.us10.list-manage.com/subscribe/post?u=574142e29404e18c535dce7c3&amp;id=90aec81400" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
					<h2>Subscribe</h2>
				<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
				<div class="mc-field-group">
					<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
				</label>
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
				<div class="mc-field-group">
					<label for="mce-FNAME">First Name </label>
					<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
				</div>
				<div class="mc-field-group">
					<label for="mce-LNAME">Last Name </label>
					<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
				</div>
				<div class="mc-field-group size1of2">
					<label for="mce-BIRTHDAY-month">Birthday </label>
					<div class="datefield">
						<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> / 
						<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
						<span class="small-meta nowrap">( mm / dd )</span>
					</div>
				</div>	<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_574142e29404e18c535dce7c3_90aec81400" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
				</div>

				<!--End mc_embed_signup-->	
								
				<h6 class="text-white">Inscríbete en nuestro newletter:</h6>
				<div id="mc_embed_signup">
					<form action="https://funsanmateo.us10.list-manage.com/subscribe/post?u=574142e29404e18c535dce7c3&amp;
					id=90aec81400" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" 
					class="validate" target="_blank" novalidate>


					<div class="input-group my-4">
						
						<input type="email" class="form-control" placeholder="Ingresa tu Email">

						<div class="input-group-append">
							
							<span class="input-group-text bg-dark text-white">Inscribirse</span>

						</div>

					</div>

					</form>

				</div>
				

				<div class="p-0 w-100 pt-2">
				
					<ul class="d-flex justify-content-left p-0">

					<?php 
				
				$redesSociales= json_decode($blog["redes_sociales"], true);

				foreach ($redesSociales as $key => $value) {

					echo '<li>
						<a href="'.$value["url"].'" target="_blank">
							<i class="'.$value["icono"].' lead text-white mr-3 mr-sm-4"></i>
						</a>
					</li>';
					
				}
				?>
					</ul>

				</div>

			</div>

		</div>

	</div>

</footer>