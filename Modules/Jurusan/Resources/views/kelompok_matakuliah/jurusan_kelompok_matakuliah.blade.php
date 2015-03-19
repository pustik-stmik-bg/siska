{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('kode_kelompok', 'Kode_kelompok:') !!}
			{!! Form::text('kode_kelompok') !!}
		</li>
		<li>
			{!! Form::label('nama_kelompok', 'Nama_kelompok:') !!}
			{!! Form::text('nama_kelompok') !!}
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