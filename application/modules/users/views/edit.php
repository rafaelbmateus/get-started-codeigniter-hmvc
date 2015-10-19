<?php $this->load->view($this->config->item ( 'app_layout' ).'alert'); ?>

<form action="<?php echo base_url();?>users/update" method="POST"
	data-parsley-validate enctype="multipart/form-data">
	<legend>Edit User</legend>

	<input hidden="hidden" name="user_id" type="text"
		value="<?php if (isset($user[0]->user_id)) echo $user[0]->user_id; ?>" />
	<div class="row">
		<div class="col-md-4">
			<label class="control-label">Name</label> <input name="user_name"
				type="text" class="form-control" placeholder="User name..."
				maxlength="255" value="<?php echo $user[0]->user_name; ?>" required />
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