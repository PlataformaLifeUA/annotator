<div id="msg" class="alert alert-info alert-dismissible show fade in">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	Registro añadido <strong>exitosamente.</strong>
</div>

<div class="progress" style="height: 30px;">
	<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
	<h6 class="justify-content-center d-flex position-absolute col-md-11 p-1"><?php t("Register %d of %d", 52, 100) ?></h6>
</div>

<div class=".d-flex .flex-row p-2 align-items-stretch">

</div>
		
<form action="/action_page.php">
	<!-- Text area -->
	<div class="form-group">
		<!--label class="col-sm-12" for="text"><?php t("Text:") ?></label-->
		<!--textarea class="form-control col-sm-12" rows="8" id="text" disabled><h1>hola</h1></textarea-->
		<div class="scroll-box bg-light text-muted">
			<h1>Lorem ipsum</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?</p>
		</div>
	</div>
	
	
	
	<!-- Alert level -->
	<div class="form-group row">
		<label class="sr-only" for="alertrisk"><?php t("Alert risk") ?></label>
		<div class="input-group col-md-12">
			<div class="input-group-prepend">
				<div class="input-group-text"><?php t("Alert risk") ?></div>
			</div>
			<select class="form-control col-sm-2" id="alertrisk" autofocus>
				<option>Disabled select</option>
			</select>
			<div class="input-group-text">
				<a href="#alertlevelpanel" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="alertlevelpanel"><span class="far fa-question-circle"></span></a>
			</div>
			
		</div>
	</div>
	<div class="form-group row collapse" id="alertlevelpanel">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php t("Description") ?></h5>
					<p class="card-text">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php t("Examples") ?></h5>
					<p class="card-text">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php t("Hints") ?></h5>
					<p class="card-text">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Primary message type -->
	<div class="form-group row">
		<label class="sr-only" for="PrimaryMessageType"><?php t("Primary message type") ?></label>
		<div class="input-group col-md-12">
			<div class="input-group-prepend">
				<div class="input-group-text"><?php t("Primary message type") ?></div>
			</div>
			<select class="form-control col-md-2" id="primaryMessageType">
				<option>Disable select</option>
			</select>
			<div class="input-group-text">
				<a href="#primarymessagepanel" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="primarymessagepanel"><span class="far fa-question-circle"></span></a>
			</div>
		</div>
	</div>
	<div class="form-group row collapse" id="primarymessagepanel">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php t("Description") ?></h5>
					<p class="card-text">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php t("Examples") ?></h5>
					<p class="card-text">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php t("Hints") ?></h5>
					<p class="card-text">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Secondary message type -->
	<div class="form-group row">
		<label class="sr-only" for="secondaryMessageType"><?php t("Secondary message type") ?></label>
		<div class="input-group col-md-12">
			<div class="input-group-prepend">
				<div class="input-group-text"><?php t("Primary message type") ?></div>
			</div>
			<select class="form-control col-md-2" id="secondaryMessageType">
				<option>Disable select</option>
			</select>
			<div class="input-group-text">
				<a href="#secondarymessagepanel" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="secondarymessagepanel"><span class="far fa-question-circle"></span></a>
			</div>
		</div>
	</div>
	<div class="form-group row collapse" id="secondarymessagepanel">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php t("Description") ?></h5>
					<p class="card-text">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php t("Examples") ?></h5>
					<p class="card-text">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php t("Hints") ?></h5>
					<p class="card-text">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Buttons -->
	<div class="form-group">
		<div class="btn-group" role="group">
			<a href="#" class="btn btn-primary"><?php t("Save & next") ?></a>
			<a href="#" class="btn btn-secondary col-md-12"><?php t("Save") ?></a>
			<a href="#" class="btn btn-secondary col-md-12"><?php t("Before") ?></a>
			<a href="#" class="btn btn-secondary col-md-12"><?php t("Next") ?></a>
		</div>
	</div>
