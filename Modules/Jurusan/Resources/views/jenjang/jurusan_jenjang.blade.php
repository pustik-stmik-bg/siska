{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('kode_jenjang', 'Kode_jenjang:') !!}
			{!! Form::text('kode_jenjang') !!}
		</li>
		<li>
			{!! Form::label('nama_jenjang', 'Nama_jenjang:') !!}
			{!! Form::text('nama_jenjang') !!}
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