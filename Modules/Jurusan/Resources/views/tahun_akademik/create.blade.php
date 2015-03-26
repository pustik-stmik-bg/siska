@extends('layout.master')

@section('init')
<?php
$js  = array(
		'date'         => 'tanggal_mulai|tanggal_berakhir',
	);
?>
@stop

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					
					{!! Form::open(array('url' => '/jurusan/tahun_akademik/store', 'method' => 'POST')) !!}

					{!! Form::label('tahun_akademik', 'Tahun_akademik:') !!}
					{!! Form::text('tahun_akademik') !!}

					{!! Form::label('semester', 'Semester:') !!}
					{!! Form::text('semester') !!}

					{!! Form::label('status', 'Status:') !!}
					{!! Form::text('status') !!}

					{!! Form::label('tanggal_mulai', 'Tanggal Mulai:') !!}
					{!! Form::text('tanggal_mulai') !!}

					{!! Form::label('tanggal_berakhir', 'Tanggal Berakhir:') !!}
					{!! Form::text('tanggal_berakhir') !!}

					{!! Form::submit() !!}

					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>

@stop
