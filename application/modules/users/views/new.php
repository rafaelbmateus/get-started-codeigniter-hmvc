<?php $this->load->view($this->config->item ( 'app_layout' ).'alert'); ?>

<form action="<?php echo base_url();?>users/add" method="POST"
	data-parsley-validate enctype="multipart/form-data">
	<legend>Create User</legend>

	<div class="row">
		<div class="col-md-3">
			<label class="control-label">Name</label> <input name="user_name"
				type="text" class="form-control" placeholder="User name..."
				maxlength="255" required />
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-1">
			<a class="btn btn-danger" href="<?php echo base_url().'users'; ?>">Cancel</a>
		</div>
		<div class="col-md-1">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
	</div>
</form>