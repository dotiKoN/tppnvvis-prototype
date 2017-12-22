
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<label>Vardas</label>
				<input type="text" class="form-control" name="name" placeholder="Įveskite vardą">
			</div>
			<div class="form-group">
				<label>El. paštas</label>
				<input type="email" class="form-control" name="email" placeholder="Įveskite el. paštą">
			</div>
			<label>Gimimo data</label>	
			<div data-provide="datepicker" class="input-group date">
				<input type="text" class="form-control" name="date" placeholder="Įveskite gimimo datą">
				<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
			</div>
			<div class="form-group">
				<label>Prisijungimo vardas</label>
				<input type="text" class="form-control" name="username" placeholder="Įveskite prisijungimo vardą">
			</div>
			<div class="form-group">
				<label>Slaptažodis</label>
				<input type="password" class="form-control" name="password" placeholder="Įveskite slaptažodį">
			</div>
			<div class="form-group">
				<label>Slaptažodžio patvirtinimas</label>
				<input type="password" class="form-control" name="password2" placeholder="Patvirtinkite slaptažodį">
			</div>
			<button type="submit" class="btn btn-block">Registruotis</button>
		</div>
	</div>
<?php echo form_close(); ?>
