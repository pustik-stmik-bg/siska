@extends('layout.master')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					
					<?php
					$data->add('tahun_akademik','Tahun Akademik', 'text');
					$data->add('semester','Semester','select')->options(array('1' => 'Ganjil', '0' => 'Genap'));
					$data->add('status','Status','select')->options(array('N' => 'Tidak Aktif', 'A' => 'Aktif'));
					$data->add('tanggal_mulai','Tgl Mulai','date')->format('d/m/Y');
					$data->add('tanggal_berakhir','Tgl Berakhir', 'date')->format('d/m/Y');
					$data->submit('SIMPAN', 'BR');
					$data->link('/jurusan/tahun_akademik', 'KEMBALI', 'BR', array('class' => 'btn btn-warning'));
					?>

					{!! $data !!}

				</div>
			</div>
		</div>
	</div>


@stop
