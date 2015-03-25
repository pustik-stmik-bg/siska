@extends('layout.master')

@section('content')

	<div class="box">

		<div class="box-header">
			<h3 class="box-title">Hover Data Table</h3>
		</div><!-- /.box-header -->

		<div class="box-body">
			<div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">
				<table id="example2" class="table table-bordered table-hover dataTable" aria-describedby="example2_info">
					<thead>
						<tr role="row">
							<th class="sorting_asc"
								role="columnheader"
								tabindex="0"
								aria-controls="example2"
								rowspan="1"
								colspan="1"
								aria-sort="ascending"
								aria-label="Rendering engine: activate to sort column descending">
								Tahun Akademik
							</th>
							<th class="sorting"
								role="columnheader"
								tabindex="0"
								aria-controls="example2"
								rowspan="1"
								colspan="1"
								aria-label="Browser: activate to sort column ascending">
								Semester
							</th>
							<th class="sorting"
								role="columnheader"
								tabindex="0"
								aria-controls="example2"
								rowspan="1"
								colspan="1"
								aria-label="Platform(s): activate to sort column ascending">
								Tgl Mulai
							</th>
							<th class="sorting"
								role="columnheader"
								tabindex="0"
								aria-controls="example2"
								rowspan="1"
								colspan="1"
								aria-label="Engine version: activate to sort column ascending">
								Tgl Berakhir
							</th>
							<th class="sorting"
								role="columnheader"
								tabindex="0"
								aria-controls="example2"
								rowspan="1"
								colspan="1"
								aria-label="Engine version: activate to sort column ascending">
								Status
							</th>
							<th class="sorting"
								role="columnheader"
								tabindex="0"
								aria-controls="example2"
								rowspan="1"
								colspan="1"
								aria-label="Engine version: activate to sort column ascending">
								Tindakan
							</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th rowspan="1" colspan="1">Tahun Akademik</th>
							<th rowspan="1" colspan="1">Semester</th>
							<th rowspan="1" colspan="1">Tgl Mulai</th>
							<th rowspan="1" colspan="1">Tgl Berakhir</th>
							<th rowspan="1" colspan="1">Status</th>
							<th rowspan="1" colspan="1">Tindakan</th>
						</tr>
					</tfoot>
					<tbody role="alert" aria-live="polite" aria-relevant="all">
						@foreach ($data as $record)
						<tr class="odd">
							<td class="sorting_1">{{ $record->tahun_akademik }}</td>
							<td>{{ $record->semester }}</td>
							<td>{{ $record->tanggal_mulai }}</td>
							<td>{{ $record->tanggal_berakhir }}</td>
							<td>{{ $record->status }}</td>
							<td>
								<div class="btn-group">
									<a href="#" class="btn btn-xs btn-warning">
										<span class="glyphicon glyphicon-pencil"></span>
									</a>
									<a href="#" class="btn btn-xs btn-danger">
										<span class="glyphicon glyphicon-trash"></span>
									</a>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				<div class="row">
					<div class="col-md-6">
						<div class="dataTables_info" id="example2_info">Showing 1 to 10 of 57 entries</div>
					</div>
					<div class="col-md-6">
						<div class="pull-right">
							<div class="dataTables_paginate paging_bootstrap">
								<ul class="pagination">
									<li class="prev disabled">
										<a href="#">← Previous</a>
									</li>
									<li class="active">
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li>
										<a href="#">3</a>
									</li>
									<li>
										<a href="#">4</a>
									</li>
									<li>
										<a href="#">5</a>
									</li>
									<li class="next">
										<a href="#">Next → </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div><!-- /.box-body -->

	</div>

@stop
