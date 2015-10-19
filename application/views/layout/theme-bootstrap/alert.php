<?php 
// info alerta
if($this->session->flashdata('error') != null) {
    echo '<div class="alert alert-danger fade in">'
        .'<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>'
        . $this->session->flashdata('error')
        . '</div>';
} 

if($this->session->flashdata('success') != null) {
    echo '<div class="alert alert-success fade in">'
        .'<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>'
        .$this->session->flashdata('success')
        .'</div>';
}
//end info alerta