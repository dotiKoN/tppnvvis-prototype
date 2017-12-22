<h2>Sąskaitos kūrimas</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('invoices/create'); ?>
  <div class="form-group">
    <label>user_id</label>
    <input type="text" class="form-control" name="user_id" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>transport_id</label>
    <input type="text" class="form-control" name="transport_id" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>class_id</label>
    <input type="text" class="form-control" name="class_id" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>i_total</label>
    <input type="text" class="form-control" name="i_total" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>i_startdate</label>
    <input type="text" class="form-control" name="i_startdate" placeholder="Įrašykite pavadinimą">
  </div>
  <div class="form-group">
    <label>i_enddate</label>
    <input type="text" class="form-control" name="i_enddate" placeholder="Įrašykite pavadinimą">
  </div>
  <button type="submit" class="btn btn-default">Kurti įrašą</button>
</form>