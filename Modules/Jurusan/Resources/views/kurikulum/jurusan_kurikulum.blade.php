{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nama_kurikulum', 'Nama_kurikulum:') !!}
			{!! Form::text('nama_kurikulum') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('sks_wajib', 'Sks_wajib:') !!}
			{!! Form::text('sks_wajib') !!}
		</li>
		<li>
			{!! Form::label('sks_pilihan', 'Sks_pilihan:') !!}
			{!! Form::text('sks_pilihan') !!}
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