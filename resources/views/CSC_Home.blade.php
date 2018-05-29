@section('title','Computer Science Club')

@section('stylesheet')
<link type="text/css" rel="stylesheet" href="css/style.css" />
@endsection('stylesheet')

@section('Background')
<!-- Background Image -->
<div class="bg-img" style="background-image: url('./img/22196135_1860110757652514_6360546506832048375_n.jpg');">
	<div class="overlay"></div>
</div>
<!-- /Background Image -->
@endsection('Background')

@section('NavigationBar')
<!--  Main navigation  -->
<ul class="main-nav nav navbar-nav navbar-right">
	<li><a href="#home">Accueil</a></li>
	<li><a href="#about">Qui Sommes Nous?</a></li>
	<li><a href="#portfolio">Evenements</a></li>
	<li><a href="#service">Services</a></li>
	<li><a href="#joinus">Nous Rejoindre</a></li>
	<li><a href="#contact">Contact</a></li>
	<li><a href="login">Espace Membre</a></li>
	<li><a style="color:tomato;"href="Ensat_CD"><span >Ensat Coding Challenge</span></a></li>
</ul>
<!-- /Main navigation -->
@endsection('NavigationBar')

@section('HomeContent')
<!-- home content -->
<div class="col-md-10 col-md-offset-1">
	<div class="home-content">
		<h1 class="white-text"><span style="color: #6195FF;">C</span>omputer <span style="color: #6195FF;">S</span>cience <span style="color: #6195FF;">C</span>lub</h1>
		<p class="white-text">Computer Science Club (CSC) est fondé en Mai 2009 par un groupe d'élèves ingénieurs de l'Ecole National des Science Appliquées de Tanger.
		</p>
		<a class="white-btn" href="#about">Get Started!</a>
	</div>
</div>
<!-- /home content -->
@endsection






@extends('layouts.CSC')
@section('content')

	@include('inc.CSC.about')
	@include('inc.CSC.portfolio')
	@include('inc.CSC.service')
	@include('inc.CSC.joinus')
	@include('inc.CSC.Statistiques')
	@include('inc.CSC.contactus')

@endsection('content')
