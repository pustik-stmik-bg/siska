{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('kode_jurusan', 'Kode_jurusan:') !!}
			{!! Form::text('kode_jurusan') !!}
		</li>
		<li>
			{!! Form::label('nama_jurusan', 'Nama_jurusan:') !!}
			{!! Form::text('nama_jurusan') !!}
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