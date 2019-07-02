@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
			<div class="card-header">Ubah Mahasiswa</div>	
			
			<div class="card-body">
				<form action="{{ url('/mahasiswa/edit/' . $mahasiswa->id) }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label>NIM</label>
						<input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Mahasiswa</label>
						<input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
					</div>
					<div class="form-group">
						<label>Prodi</label>
						<select name="prodi_id" class="form-control">
							<option value="">Pilih Prodi</option>
							@foreach($prodis as $prodi)
							<option value="{{ $prodi->id }}" {{ ($mahasiswa->prodi_id == $prodi->id) ?'selected':'' }}>{{ $prodi->nama }}</option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection