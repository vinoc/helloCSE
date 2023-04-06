<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title', 'Test HelloCSE__Kevin DUSAPIN') | {{ env('APP_NAME') }}</title>


</head>

<body>
	@yield('content')

	<footer>
		<author id="autor">Test de Kevin DUSAPIN</author>
	</footer>

</body>

</html>