<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
        <noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a class="logo">
									<span class="symbol" style="" href="index.html"><img style="width: 100px; height: 100px;"src="{{asset('images/logo2.png')}}" alt="" /></span><span class="title">JOB4U</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Меню</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Меню</h2>
						<ul>
							<li><a href="http://jobs-php.com/">Начало</a></li>
							<li><a href="{{route('cities')}}">Градове</a></li>
							<li><a href="{{route('companies')}}">Компании</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
                        @yield('content');
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Свържете се с нас</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Име" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Имейл" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Съобщение"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Изпрати" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Последвай ни</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; All rights reserved</li><li>Design: <a href="http://html5up.net">Raya Zdravkova 2022.</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('assets/js/browser.min.js')}}"></script>
            <script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
            <script src=" {{asset('assets/js/util.js')}}"></script>
            <script src=" {{asset('assets/js/main.js')}}"></script>

	</body>
</html>