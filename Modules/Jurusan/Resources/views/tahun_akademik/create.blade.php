@extends('layout.master')

@section('content')

	<?php
	$data->add('kode_tahun_akademik','Title', true);
	$data->add('tahun_akademik','author', true);
	$data->edit('/tahun_akademik', 'Edit','modify|delete', 'kode_tahun_akademik');
	$data->link('/tahun_akademik',"Add New", "TR");
	$data->paginate(10);
	?>

	{!! $data  !!}

@stop
