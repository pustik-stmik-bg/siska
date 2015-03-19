{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('tahun_akademik', 'Tahun_akademik:') !!}
			{!! Form::text('tahun_akademik') !!}
		</li>
		<li>
			{!! Form::label('semester', 'Semester:') !!}
			{!! Form::text('semester') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('tanggal_mulai', 'Tanggal_mulai:') !!}
			{!! Form::text('tanggal_mulai') !!}
		</li>
		<li>
			{!! Form::label('tanggal_berakhir', 'Tanggal_berakhir:') !!}
			{!! Form::text('tanggal_berakhir') !!}
		</li>
		<li>
			{!! Form::label('created_by', 'Created_by:') !!}
			{!! Form::text('created_by') !!}
		</li>
		<li>
			{!! Form::label('updated_by', 'Updated_by:') !!}
			{!! Form::text('updated_by') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}