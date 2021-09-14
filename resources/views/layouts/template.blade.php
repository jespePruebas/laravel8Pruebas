<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
</head>

<body>

	<header>
		<nav>
			<ul>
				<li>Your menu</li>
			</ul>
		</nav>
	</header>
	
	<section>
	
		<article>
		@yield('content')
		</article>

		
	</section>

	

	<footer>
		<p>Copyright 2021 Your name</p>
	</footer>

</body>

</html>