@extends('transaksi.layout')

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

        <h5 class="card-title fw-bolder mb-3">Tambah Transaksi</h5>
        
		<form method="post" action="{{ route('transaksi.store') }}">
			@csrf
            <div class="mb-3">
                <label for="id_transaksi" class="form-label">ID transaksi</label>
                <input type="text" class="form-control" id="id_transaksi" 
                    name="id_transaksi" placeholder="ID transaksi">
            </div>
			<div class="mb-3">
                <label for="id_barang" class="form-label">ID Barang</label>
                <input type="text" class="form-control" id="id_barang" 
                    name="id_barang" placeholder="ID barang">
            </div>
            <div class="mb-3">
                <label for="id_pembeli" class="form-label">ID Pembeli</label>
                <input type="text" class="form-control" id="id_pembeli" 
                    name="id_pembeli" placeholder="ID pembeli">
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" class="form-control" id="tanggal" 
                    name="tanggal" placeholder="tahun-bulan-hari">
            </div>
			<div class="text-center">
				<input type="submit" class="btn btn-success" value="Tambah" />
                <a class="btn btn-primary" href="http://127.0.0.1:8000/transaksi" role="button">Kembali</a>
			</div>
		</form>
	</div>
</div>

@stop