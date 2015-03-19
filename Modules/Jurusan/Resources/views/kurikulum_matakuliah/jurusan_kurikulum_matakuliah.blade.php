{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('kode_kurikulum', 'Kode_kurikulum:') !!}
			{!! Form::text('kode_kurikulum') !!}
		</li>
		<li>
			{!! Form::label('kode_matakuliah', 'Kode_matakuliah:') !!}
			{!! Form::text('kode_matakuliah') !!}
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