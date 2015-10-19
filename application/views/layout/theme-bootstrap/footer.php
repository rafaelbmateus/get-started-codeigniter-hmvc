<footer class="text-center"><?php echo $this->config->item ( 'app_footer' ); ?></footer>

<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
	<!-- script references -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js" type="text/javascript"></script>
	</body>
</html>