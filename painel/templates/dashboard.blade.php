<!DOCTYPE html>
<html>
	<head>
		<title>Curso Layout Dashboard</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!--Fonts-->
    <link rel="stylesheet" href="{{url('painel/css/font-awesome.min.css')}}">

		<!--CSS Person-->
    <link rel="stylesheet" href="{{url('painel/css/webdevalfa.css')}}">
    <link rel="stylesheet" href="{{url('painel/css/webdevalfa-reset.css')}}">

		<!--Favicon-->
    <link rel="icon" type="image/png" href="{{url('imgs/favicon.png')}}">
	</head>
<body>

<section class="menu">
	
	<div class="logo">
    <img src="{{'imgs/icone-alfa.png'}}" alt="webdevalfa" class="logo-painel">
	</div>

	<div class="list-menu">
		<ul class="menu-list">
			<li>
            <a href="{{url('/painel/home')}}">
					<i class="fa fa-home" aria-hidden="true"></i>
					Home
				</a>
			</li>

			<li>
            <a href="{{url('/painel/list')}}">
					<i class="fa fa-id-card" aria-hidden="true"></i>
					Listagem
				</a>
			</li>

			<li>
            <a href="{{url('/painel/forms')}}">
					<i class="fa fa-fort-awesome" aria-hidden="true"></i>
					Forms
				</a>
			</li>
		</ul>
	</div>

</section><!--End Menu-->

<section class="content">
	<div class="top-dashboard">
		
		<div class="dropdown user-dash">
		  <div class="dropdown-toggle" id="dropDownCuston" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			<img src="{{url('imgs/no-image.png')}}" alt="Jaime Vendrame" class="user-dashboard img-circle">
		    <p class="user-name">Nome User</p>
		    <span class="caret"></span>
		  </div>
		  <ul class="dropdown-menu dp-menu" aria-labelledby="dropDownCuston">
		    <li><a href="#">Perfil</a></li>
		    <li><a href="#">Logout</a></li>
		  </ul>
		</div>
	</div><!--Top Dashboard-->

	<div class="content-ds">
		
		<div class="bred">
			<a href="" class="bred">Home  ></a> <a href="" class="bred">Dashboard</a>
		</div>

		
        @yield('conteudo')


	</div><!--End Content DS-->

</section><!--End Content-->

	

	<!--jQuery-->
<script src="{{url('painel/js/jquery-3.1.1.min.js')}}"></script>

	<!-- jS Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>