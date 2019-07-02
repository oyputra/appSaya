@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
	<h1>Mahasiswa</h1>
@stop

@section('content')

				<a href="/mahasiswa/new" class="btn btn-primary">Buat Mahasiswa Baru</a>
				<table class="table table-striped">
					<tr>
						<th><u>NIM</u></th>
						<th><u>Nama</u></th>
						<th><u>Prodi</u></th>
						<th><u>Action</u></th>
					</tr>
					@foreach($mahasiswas as $mhs)
					<tr>
						<td><b>{{ $mhs->nim }}</b></td>
						<td><b>{{ $mhs->nama }}</b></td>
						<td><b>{{ $mhs->prodi->nama }}</b></td>
						<td>
							<a href="/mahasiswa/edit/{{ $mhs->id }}" class="btn btn-dark btn-sm">Edit</a>
							<form action="/mahasiswa/delete/{{ $mhs->id }}" method="post">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
							</form>
						</td>
					</tr>
					@endforeach
				</table>
				
			
@stop