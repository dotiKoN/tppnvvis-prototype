<h2>Naujos kategorijos kūrimas</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group">
		<label>Kategorijos pavadinimas</label>
		<input type="text" class="form-control" name="name" placeholder="Įrašykite pavadinimą">
	</div>
	<button type="submit" class="btn btn-default">Sukurti</button>
</form>
