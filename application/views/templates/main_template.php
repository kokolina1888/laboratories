<?php 

$this->load->view('templates/header', $title);
$this->load->view('templates/modals');
$this->load->view($dynamic_view);
$this->load->view('templates/footer');
