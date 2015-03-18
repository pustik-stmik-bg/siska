<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css') !!}
		{!! Html::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
		{!! Html::style('assets/css/AdminLTE.min.css') !!}
		{!! Html::style('assets/css/skins/skin-blue.min.css') !!}

		<title>Module Jurusan</title>
	</head>

	<body class="skin-blue">

		<div class="wrapper">

		@include('layout.header')

		@yield('content')

		</div>

		{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
		{!! Html::script('assets/js/app.min.js') !!}
		{!! Html::script('assets/js/pages/dashboard2.js') !!}

	</body>
</html>
