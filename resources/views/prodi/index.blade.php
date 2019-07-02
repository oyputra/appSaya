@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
	<h1>Prodi</h1>
@stop

@section('content')

	<a href="/prodi/new" class="btn btn-primary">Buat Prodi Baru</a>
	<table class="table table-striped">
		<tr>
			<th><u>Kode</u></th>
			<th><u>Nama</u></th>
			<th><u>Action</u></th>
		</tr>
		@foreach($prodis as $prodi)
		<tr>
			<td><b>{{ $prodi->kode }}</b></td>
			<td><b>{{ $prodi->nama }}</b></td>
			<td>
				<td>
					<button class="btn btn-info btn-sm">
					<a href="/prodi/edit/{{ $prodi->id }}" style="color: white">Edit</a>
					</button>
				</td>
				<td>
					<form action="/prodi/delete/{{ $prodi->id }}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
					</form>
				</td>	
			</td>
		</tr>
		@endforeach
	</table>

@stop