@extends('jurusan::layouts.master')

@section('content')
	
	@foreach ($data as $record)
		{{ $record->kode_tahun_akademik }} <br>
		{{ $record->nama_tahun_akademik }} <br>
		{{ $record->semester }} <br>
		{{ $record->status }}
	@endforeach

@stop
