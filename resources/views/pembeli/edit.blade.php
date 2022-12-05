@extends('pembeli.layout')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
        </ul>
    </div>
@endif

    
<div class="card mt-4">
	<div class="card-body">

        <h5 class="card-title fw-bolder mb-3">Ubah Data Pembeli</h5>

		<form method="post" action="{{ route('pembeli.update', $data->id_pembeli) }}">
			@csrf
            <div class="mb-3">
                <label for="id_pembeli" class="form-label">ID Pembeli</label>
                <input type="text" class="form-control" id="id_pembeli" name="id_pembeli" value="{{ $data->id_pembeli }}">
            </div>
			<div class="mb-3">
                <label for="nama" class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">NO Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $data->no_telp }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
            </div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Ubah" />
                <a class="btn btn-primary" href="http://127.0.0.1:8000/pembeli" role="button">Kembali</a>
			</div>
		</form>
	</div>
</div>

@stop