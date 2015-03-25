@extends('layout.master')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					
					<?php
					$data->add('tahun_akademik','Tahun Akademik', true);
					$data->add('semester','Semester', true);
					$data->add('tanggal_mulai','Tanggal Mulai', true);
					$data->add('tanggal_berakhir','Tanggal Berakhir', true);
					$data->add('status','Status', true);
					$data->edit('/tahun_akademik', 'Action','modify|delete', 'kode_tahun_akademik');
					$data->link('/tahun_akademik/create', "Tambah", "TR");
					$data->paginate(10);
					$data->attributes=array("class" => "table table-bordered table-hover");
					?>

					{!! $data !!}

				</div>
			</div>
		</div>
	</div>


@stop
