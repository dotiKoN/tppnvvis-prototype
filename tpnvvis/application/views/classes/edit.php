<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('classes/update'); ?>
	<input type="hidden" name="c_id" value="<?php echo $classes['c_id'] ?>">

  <div class="form-group">
    <label>Klasės pavadinimas</label>
    <input type="text" class="form-control" name="c_title" placeholder="Įrašykite pavadinimą" value="<?php echo $classes['c_title'] ?>">
  </div>
  <div class="form-group">
    <label>Valandinis įkainis</label>
    <input type="text" class="form-control" name="c_ratehour" placeholder="Įrašykite pavadinimą" value="<?php echo $classes['c_ratehour'] ?>">
  </div>
  <div class="form-group">
    <label>Dieninis įkainis</label>
    <input type="text" class="form-control" name="c_rateday" placeholder="Įrašykite pavadinimą" value="<?php echo $classes['c_rateday'] ?>">
  </div>
  <div class="form-group">
    <label>Savaitinis įkainis</label>
    <input type="text" class="form-control" name="c_rateweek" placeholder="Įrašykite pavadinimą" value="<?php echo $classes['c_rateweek'] ?>">
  </div>
  <div class="form-group">
    <label>Mėnesinis įkainis</label>
    <input type="text" class="form-control" name="c_ratemonth" placeholder="Įrašykite pavadinimą" value="<?php echo $classes['c_ratemonth'] ?>">
  </div>
  <button type="submit" class="btn btn-default">Redaguoti</button>
</form>