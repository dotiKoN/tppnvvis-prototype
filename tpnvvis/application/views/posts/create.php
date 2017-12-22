<h2>Įrašo kūrimas</h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Pavadinimas</label>
    <input type="text" class="form-control" name="title" placeholder="Įrašykite pavadnimą">
  </div>
  <div class="form-group">
    <label>Tekstas</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Įrašykite tekstą"></textarea>
  </div>
  <div class="form-group">
    <label>Kategorija</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Įkelti nuotrauką</label>
    <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-default">Kurti įrašą</button>
</form>