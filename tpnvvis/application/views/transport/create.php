<h2>Įrašo kūrimas</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('transport/create'); ?>
  <div class="form-group">
    <label>t_licence</label>
    <input type="text" class="form-control" name="t_licenceplate" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>t_information</label>
    <textarea id="editor1" class="form-control" name="t_information" placeholder="Įrašykite tekstą"></textarea>
  </div>
  <div class="form-group">
    <label>t_make</label>
    <input type="text" class="form-control" name="t_make" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>t_model</label>
    <input type="text" class="form-control" name="t_model" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>t_year</label>
    <input type="text" class="form-control" name="t_year" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>t_fueltype</label>
    <input type="text" class="form-control" name="t_fueltype" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>t_location</label>
    <input type="text" class="form-control" name="t_location" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>t_availability</label>
    <input type="text" class="form-control" name="t_availability" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>t_color</label>
    <input type="text" class="form-control" name="t_color" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>Klasė</label>
    <select name="class_id" class="form-control">
      <?php foreach($classes as $class): ?>
        <option value="<?php echo $class['c_id']; ?>"><?php echo $class['c_title']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Įkelti nuotrauką</label>
    <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-default">Kurti įrašą</button>
</form>