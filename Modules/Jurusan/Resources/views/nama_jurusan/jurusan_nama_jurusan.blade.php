{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('kode_jenjang', 'Kode_jenjang:') !!}
			{!! Form::text('kode_jenjang') !!}
		</li>
		<li>
			{!! Form::label('kode_jurusan', 'Kode_jurusan:') !!}
			{!! Form::text('kode_jurusan') !!}
		</li>
		<li>
			{!! Form::label('nama_jurusan', 'Nama_jurusan:') !!}
			{!! Form::text('nama_jurusan') !!}
		</li>
		<li>
			{!! Form::label('singkatan_jurusan', 'Singkatan_jurusan:') !!}
			{!! Form::text('singkatan_jurusan') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}