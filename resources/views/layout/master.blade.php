<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('init')

	{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css') !!}
	{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
	{!! Html::style('assets/css/AdminLTE.min.css') !!}
	{!! Html::style('assets/css/skins/skin-blue.min.css') !!}

	@if (isset($css))
		{!! Assets::styles($css) !!}
	@endif

	<title>Module Jurusan</title>
</head>

<body class="skin-blue fixed">

	<div class="wrapper">
		
		@include('layout.header')
		@include('layout.sidebar')
		@include('layout.content')

	</div>

	{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
	{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js') !!}
	{!! Html::script('assets/js/adminlte/app.min.js') !!}
	{!! Html::script('assets/js/adminlte/jquery.slimscroll.min.js') !!}

	@if (isset($js))
		{!! Assets::scripts($js) !!}
	@endif

</body>
</html>
