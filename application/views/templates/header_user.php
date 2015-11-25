<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title_user; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.png');?>" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic,700,700italic,600,800,800italic' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ;?>" />
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" />
</head>

<!--  .............................. START TOPBAR .............................. -->
<body>

<div class="wrapper">

<!--<div class="bar">
		<p>Ние вярваме в качеството в медицинската лаборатория.</p>
		<span class="right-bar">
			<a href="#" class="fa fa-facebook-f"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-google-plus"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-tumblr"></a>
			<div class="div-button">
			<a href="#login-bar" class="button">+ Вход за участници</a>

			</div>
		</span>
	</div>-->

<!--  .............................. START HEADER .............................. -->

	<!--<div class="header">
		<span><img src="<?php echo base_url('assets/img/logo.png');?>" alt="Logo" class="logo"></span>

		<div class="header-right">
			<span class="bank-account">
				<a href="#bank-header"><span class="info-sprite bank"></span></a>
				<a href="#bank-header"><p>Банкова сметка</p></a>
			</span>
			<span class="email-adress">
				<a href="#email-header"><span class="info-sprite email"></span></a>
				<a href="#email-header"><p>bulgarianlab@email.com</p></a>
			</span>
		</div>
	</div>

<!--  .............................. START MENU .............................. -->

	<div class="menu">
		<ul>
		    <li><a href="<?php echo base_url('home_user'); ?>">Начало</a></li>
		    <li><a href="<?php echo base_url('user/add_data_initial'); ?>">Въвеждане на данни</a></li>
		    <li><a href="<?php echo base_url('user/show_user_programs'); ?>">Преглед</a></li>
		     <li><a href="<?php echo base_url('user/error')?>">Оценка</a></li>
		    <li><a href="<?php echo base_url('home_user/logout'); ?>">Изход</a></li>
		</ul>
	</div>

<!--  .............................. START BANNER .............................. -->


	<div class="banner banner-admin">
		<h2>Зона за участници</h2>
		<img src="<?php echo base_url('assets/img/separator-img.png');?>" alt="Separator">
	</div>