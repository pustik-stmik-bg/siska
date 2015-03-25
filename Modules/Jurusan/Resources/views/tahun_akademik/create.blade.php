@extends('layout.master')

@section('content')

<div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Tahun Akademik</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
					<?php
					$data->add('kode_tahun_akademik','Title', true);
					$data->attributes=array("class" => "table table-bordered");
					$data->add('tahun_akademik','author', true);
					$data->edit('/tahun_akademik', 'Edit','modify|delete', 'kode_tahun_akademik');
					$data->link('/tahun_akademik',"Add New", "TR");
					$data->paginate(10);
					?>

					{!! $data  !!}
				</div>
				</div>
			</div>
</div>


@stop
