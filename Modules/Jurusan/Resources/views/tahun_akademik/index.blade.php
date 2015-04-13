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
					
					<?php
					$data->add('tahun_akademik','Tahun Akademik', true);
					$data->add('{{ ($semester == "1" ? "Ganjil" : "Genap") }}','Semester');
					$data->add('{{ ($status == "A" ? "Aktif" : "Tidak Aktif") }}','Status');
					$data->add('tanggal_mulai','Tanggal Mulai', true);
					$data->add('tanggal_berakhir','Tanggal Berakhir', true);
					$data->edit('/jurusan/tahun_akademik', 'Action','modify|delete', 'kode_tahun_akademik');
					$data->link('/jurusan/tahun_akademik/create', 'TAMBAH', 'TR', array('class' => 'btn btn-primary'));
					$data->paginate(10);
					$data->attributes = array("class" => "table table-bordered table-hover");
					?>

					{!! $data !!}

				</div>
			</div>
		</div>
	</div>

@stop
