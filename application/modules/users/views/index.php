<?php $this->load->view($this->config->item ( 'app_layout' ).'alert'); ?>

<a href="<?php echo base_url();?>users/create" class="btn btn-primary"><i
	class="glyphicon glyphicon-plus glyphicon-white"></i> Adicionar</a>
	
<h2>List users</h2>

<!-- list users -->
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th width="5%">#</th>
			<th width="70%">Name</th>
			<th width="10%">Created at</th>
			<th width="10%">Updated at</th>
			<th width="2%">Edit</th>
			<th width="2%">Delete</th>
		</tr>
	</thead>
	<?php
	if (isset ( $users )) {
		foreach ( $users as $user ) {
			echo '<tr>';
			echo '<td>' . $user->user_id . '</td>';
			echo '<td>' . $user->user_name . '</td>';
			echo '<td>' . $user->created_at . '</td>';
			echo '<td>' . $user->updated_at . '</td>';
			echo '<td>';
			echo '<a href="' . base_url () . 'users/edit/' . $user->user_id . '" class="btn btn-success tip-top" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>';
			echo '</td>';
			echo '<td>';
			echo '<a href="#modal-delete" role="button" data-toggle="modal" register="' . $user->user_id . '" class="btn btn-danger tip-top" title="Excluir registro"><i class="glyphicon glyphicon-remove glyphicon-white"></i></a>';
			echo '</td>';
			echo '</td>';
			echo '</tr>';
		}
	}
	?>
</table>
<!-- list users end -->

<!-- modal delete -->
<div id="modal-delete" class="modal fade bootstrap-modal" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form action="<?php echo base_url() ?>users/delete" method="post"
			autocomplete="off">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">X</button>
					<h5 id="myModalLabel">
						<i class="fa fa-trash"></i>&nbsp;Excluir
					</h5>
				</div>
				<div class="modal-body">
					<input type="hidden" id="id_modal" name="id" />
					<h5 style="text-align: center">
						<i class="fa fa-exclamation-triangle"></i>&nbsp;Deseja realmente
						excluir esse registro?
					</h5>
					<input id="confirmDelete" name="confirmDelete" class="form-control"
						type="text"
						placeholder="Digíte CONFIRM para excluir o registro..."
						onkeyup="confirm(event)" />
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">
						<i class="fa fa-times"></i>&nbsp;Cancelar
					</button>
					<button id="btn-confirm" class="btn btn-danger">
						<i class="fa fa-trash-o"></i>&nbsp;Excluir
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- modal delete end -->

<script type="text/javascript">
$(document).ready(function(){
   $(document).on('click', 'a', function(event) { 
        var rs = $(this).attr('register');
        $('#id_modal').val(rs);
    });
});

window.onload = function(){
	document.getElementById("btn-confirm").disabled = true;
}

function confirm(evt){
	if(document.getElementById('confirmDelete').value== 'CONFIRM'){
		document.getElementById("btn-confirm").disabled = false;
 	}else{
 		document.getElementById("btn-confirm").disabled = true;
 	}
}
</script>