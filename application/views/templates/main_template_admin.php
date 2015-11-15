<?php 

$this->load->view('templates/header_admin', $title_admin);
$this->load->view($dynamic_view);
$this->load->view('templates/modals');
$this->load->view('templates/footer');
