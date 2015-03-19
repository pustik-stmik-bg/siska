{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('kode_nama_jurusan', 'Kode_nama_jurusan:') !!}
			{!! Form::text('kode_nama_jurusan') !!}
		</li>
		<li>
			{!! Form::label('kode_kompetensi', 'Kode_kompetensi:') !!}
			{!! Form::text('kode_kompetensi') !!}
		</li>
		<li>
			{!! Form::label('nama_kompetensi', 'Nama_kompetensi:') !!}
			{!! Form::text('nama_kompetensi') !!}
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