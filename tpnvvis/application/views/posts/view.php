<br>


        <div class="row  thumbnail">

            <div class="col-md-6"><h2><?php echo $post['title']; ?></h2>
                <img class="img-responsive thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
             	           <small class="post-date">Patalpinta: <?php echo $post['created_at']; ?></small><br>
			  <div class="post-body">
				<?php echo $post['body']; ?>
			</div>
            </div>

            <div class="col-md-6 ">
 <?php if($this->session->userdata('logged_in') && $this->session->userdata('username') == 'admin'): ?>
	<hr>
	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'] ?>">Redaguoti</a>
	<?php echo form_open('/posts/delete/'.$post['id']); ?>
		<input type="submit" value="Trinti" class="btn btn-danger">
	</form>
<?php endif; ?>
 <?php if($this->session->userdata('username') != 'admin'): ?>
<h3>Palikite komentarą:</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
	<div class="form-group">
		<label>Vardas</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>El. paštas</label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Komentaras</label>
		<textarea name="body" class="form-control"></textarea>
	</div>

	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">

	<button class="btn btn-default" type="submit">Siųsti komentarą</button>
</form>
            </div>

        </div>
<?php endif; ?>
<div class="row">
	<div class="col-md-6">
<h3>Komentarai</h3>

<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="thumbnail">
		<div class="well">

		<h5>[parašė <strong><?php echo $comment['name']; ?></strong>]</h5>
		<i><?php echo $comment['body']; ?></i><br>
		</div>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>Komentarų dar nėra</p>
<?php endif; ?>	
	</div>
</div>






