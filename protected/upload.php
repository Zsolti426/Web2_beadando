<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 2) : ?> 

	<form action="index.php?P=uploadhelp" method="post" enctype="multipart/form-data">
		<h1>Kép feltöltése</h1><br>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="filename">Fájl neve</label>
				<input type="text" class="form-control" id="filename" name="filename">
			</div>
		</div>
		<div class="form-group">
			<label for="exampleFormControlFile1">Fájl bevitele a gombra kattintva</label>
			<input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
		</div>
		<div class="form-row">
				<div class="form-group col-md-12">
					<button type="submit" class="btn btn-primary btn-light text-primary my-text-center" name="submit">Feltöltés</button>
				</div>					
			</div>											
	</form>
	<?php endif; ?>