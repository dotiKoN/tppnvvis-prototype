<h2>Naujos klasės kūrimas</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('classes/create'); ?>

	<div class="form-group">
		<label>Klasės pavadinimas</label>
		<input type="text" class="form-control" name="c_title" placeholder="Įrašykite pavadinimą">
	</div>
	<div class="form-group">
		<label>Valandinis įkainis</label>
		<input type="text" class="form-control" name="c_ratehour" placeholder="Įrašykite pavadinimą">
	</div>
	<div class="form-group">
		<label>Dieninis įkainis</label>
		<input type="text" class="form-control" name="c_rateday" placeholder="Įrašykite pavadinimą">
	</div>
	<div class="form-group">
		<label>Savaitinis įkainis</label>
		<input type="text" class="form-control" name="c_rateweek" placeholder="Įrašykite pavadinimą">
	</div>
	<div class="form-group">
		<label>Mėnesinis įkainis</label>
		<input type="text" class="form-control" name="c_ratemonth" placeholder="Įrašykite pavadinimą">
	</div>		
	<button type="submit" class="btn btn-default">Sukurti</button>
</form>
