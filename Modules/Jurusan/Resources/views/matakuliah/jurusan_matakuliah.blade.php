{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('kode_matakuliah', 'Kode_matakuliah:') !!}
			{!! Form::text('kode_matakuliah') !!}
		</li>
		<li>
			{!! Form::label('nama_matakuliah', 'Nama_matakuliah:') !!}
			{!! Form::text('nama_matakuliah') !!}
		</li>
		<li>
			{!! Form::label('sks_teori', 'Sks_teori:') !!}
			{!! Form::text('sks_teori') !!}
		</li>
		<li>
			{!! Form::label('sks_praktek', 'Sks_praktek:') !!}
			{!! Form::text('sks_praktek') !!}
		</li>
		<li>
			{!! Form::label('sks_praktikum', 'Sks_praktikum:') !!}
			{!! Form::text('sks_praktikum') !!}
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