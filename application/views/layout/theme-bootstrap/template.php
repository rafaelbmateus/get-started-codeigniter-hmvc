<!-- load header -->
<?php $this->load->view($this->config->item ( 'app_layout' ).'header')?>

<!-- Main -->
<div class="container-fluid">
    <?php if(isset($view)){ $this->load->view($view); } ?>
</div>

<!-- load header -->
<?php $this->load->view($this->config->item ( 'app_layout' ).'footer')?>