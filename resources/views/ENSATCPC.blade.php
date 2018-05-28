

@section('title','ENSAT CODING CHALLENGE V2.0')
@section('stylesheet')
<link type="text/css" rel="stylesheet" href="css/styleCPC.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

@endsection('stylesheet')

@section('Background')
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/ensat_coding.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->
@endsection('Background')

@section('NavigationBar')
		<!--  Main navigation  -->
		<ul class="main-nav nav navbar-nav navbar-right">
			<li><a href="#home">Home</a></li>
			<li><a href="#Statistiques">Statistiques</a></li>
			<li><a href="#InscriptionComp">Inscription A La Competition</a></li>
			<li><a href="#service">Services</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a style="color: #6195FF;"href="/"><span>Computer Science Club</span></a></li>
		</ul>
		<!-- /Main navigation -->
@endsection('NavigationBar')


@section('HomeContent')
<!-- home content -->
<div class="col-md-10 col-md-offset-1">
	<div class="home-content">
		<h1 class="white-text"><span style="color:tomato ;">E</span>NSAT <span style="color:tomato ;">C</span>ODING <span style="color:tomato ;">C</span>HALLENGE <span style="color:tomato;" > V2.0</span></h1>
		<p class="white-text">L'ENSAT CODING CHALLENGE, Une occasion annuelle pour tous les étudiants Marocain de fortifier leur capacité
			à résoudres tous types de problèmes algorithmiques, c'est aussi une occasion de rencontre entre les jeunes intéressé spar le domaine de L'Informatique
			. Rejoignez-Nous dans ce monde plein de plaisir, de fun, et de défi!


		</p>
		<a class="white-btn" href="#Statistiques">Allons-y!</a>
	</div>
</div>
<!-- /home content -->
@endsection

@extends('layouts.CSC')
@section('content')

	<!-- Numbers -->
	<div id="Statistiques" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img2" style="background-color: tomato;">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->
		<div>
		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title white-text">Statistiques</h2>
				</div>
				<!-- number -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i class="fa fa-user" style="color:white;"></i>
						<h3 class="white-text"><span class="counter">36</span></h3>
						<span class="white-text">Membres</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i class="fa fa-users" style="color:white;"></i>
						<h3 class="white-text"><span class="counter">12</span></h3>
						<span class="white-text">Equipes</span>
					</div>
				</div>
				<!-- /number -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i class="fa fa-bank" style="color:white;"></i>
						<h3 class="white-text"><span class="counter">6</span></h3>
						<span class="white-text">Ecoles </span>
					</div>
				</div>



				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
</div>
	<!-- /Numbers -->


	<!-- Contact -->
	<div id="InscriptionComp" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Inscription à la Compétition</h2>
				</div>
				<!-- /Section-header -->

				<div class="col-md-8 col-md-offset-2">
					@include('inc.errors')
					{!! Form::open(['url' => 'inscriptionCPC/submit']) !!}
						<div class="form-group">
							{{Form::label('teamname','Nom de L\'equipe')}}
							{{Form::text('teamname','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom de l\'equipe' ] )}}
							<br>
							<fieldset>
						     <legend style='color:tomato;'>Participant 1:</legend>
								{{Form::label('Participant1Name','Nom Participant 1')}}
								{{Form::text('Participant1Name','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom du participant 1' ] )}}
								{{Form::label('Participant1Mail','E-mail du Participant 1')}}
								{{Form::text('Participant1Mail','',['class' => 'form-control' , 'placeholder' => 'Entrez l\'email du participant 1' ] )}}
							</fieldset>
								<br>
							<fieldset>
						     <legend style='color:tomato;'>Participant 2:</legend>
								{{Form::label('Particiapnt2Name','Nom Participant 2')}}
								{{Form::text('Particiapnt2Name','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom du participant 2' ] )}}
								{{Form::label('Particiapnt2Mail','E-mail du Participant 2')}}
								{{Form::text('Particiapnt2Mail','',['class' => 'form-control' , 'placeholder' => 'Entrez l\'email du participant 2' ] )}}
							</fieldset>
							<br>
							<fieldset>
						     <legend style='color:tomato;'>Participant 3:</legend>
								{{Form::label('Participant3Name','Nom Participant 3')}}
								{{Form::text('Participant3Name','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom du participant 3' ] )}}
								{{Form::label('Participant3Mail','E-mail du Participant 3')}}
								{{Form::text('Participant3Mail','',['class' => 'form-control' , 'placeholder' => 'Entrez l\'email du participant 3' ] )}}
							</fieldset>
							<br>
							<fieldset>
						     <legend style='color:tomato;'>Coach:</legend>
								{{Form::label('CoachName','Nom du Coach:')}}
								{{Form::text('CoachName','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom du Coach' ] )}}
								{{Form::label('CoachMail','E-mail du Coach')}}
								{{Form::text('CoachMail','',['class' => 'form-control required' , 'placeholder' => 'Entrez l\'email du Coach' ] )}}
								{{Form::label('CoachPhone','Telephone du Coach')}}
								{{Form::text('CoachPhone','',['class' => 'form-control' , 'placeholder' => 'Entrez l\'email du Coach' ] )}}
							</fieldset>
							<div class="text-center">
								<br>
								{{form::submit('Submit',['class' => 'btn-block main-btn'])}}

							</div>
						</div>

					{!! Form::close() !!}
				</div>

				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
@endsection('content')
