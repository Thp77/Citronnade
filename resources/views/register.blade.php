<!DOCTYPE html>
<html lang="fr">

<head>
	<title>C'est ici que la Citronnade commence </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="./form_login/css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<!-- /login-section -->
    @extends('base')
    @section('content')
	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<h1>Page d'inscription</h1>

					<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one"></h6>
							<!-- <div class="speci-login first-look">
								<img src="./form_login/images/user.png" alt="" class="img-responsive">
							</div> -->
						</div>

						<div class="bottom-content">
							<form action="{{route('register')}}" method="post">
                                @csrf

								<input type="text" name="nom" class="input-form" placeholder="Votre Nom"
										required="required" />
								<input type="text" name="prenom" class="input-form" placeholder="Votre Prénom"
										required="required" />
								<input type="email" name="email" class="input-form" placeholder="Votre Email"
										required="required" />
								<input type="password" name="password" class="input-form"
										placeholder="Votre mot de passe" required="required" />
								<button type="submit" class="loginhny-btn btn">S'inscrire !</button>
							</form>
                            @if(Session::has('status'))
                            <div class="alert alert-success text-center">{{Session::get('status')}}</div>
                        @endif
							<p>Déjà inscrit ? <a href="{{route('login')}}">Connectez-vous !</a></p>
						</div>
					</div>
				</div>
				<div class="w3l-copy-right text-center">
					<p>©2023 tout droit réservé
						<a href="#" target="_blank">Devillers Denis</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- //login-section -->
</body>

</html>
@endsection
