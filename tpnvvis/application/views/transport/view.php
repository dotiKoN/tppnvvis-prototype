<h2><?php echo $transports['t_licenceplate']; ?></h2>
	<img src="<?php echo site_url(); ?>assets/images/transports/<?php echo $transports['t_image']; ?>">
<div class="post-body">
	<?php echo $transports['t_information']; ?>
</div>
<div class="post-body">
	<?php echo $transports['class_id']; ?>
</div>

	<hr>
	<?php if($this->session->userdata('username') == 'admin'): ?>
	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>transport/edit/<?php echo $transports['t_licenceplate'] ?>">Redaguoti</a>
	<?php echo form_open('/transport/delete/'.$transports['t_id']); ?>
		<input type="submit" value="Trinti" class="btn btn-danger">
	</form>
<?php endif; ?>
                        <?php if($this->session->userdata('logged_in') && $this->session->userdata('username') != 'admin') : ?>
                          <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>transport/book/<?php echo $transports['t_licenceplate'] ?>">Rezervuoti</a>
                        <?php endif; ?>

<hr>
<?php echo validation_errors(); ?>



        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Five</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>