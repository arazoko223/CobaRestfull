@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update data Stock</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('stock.update', $stocks->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="first_name">Nama Barang:</label>
                <input type="text" class="form-control" name="nama_barang" value="{{ $stocks->nama_barang }}" />
            </div>
            <div class="form-group">
                <label for="last_name">Tanggal Update:</label>
                <input type="text" class="form-control" name="tanggal_update" value="{{ $stocks->tanggal_update }}" />
            </div>
            <div class="form-group">
                <label for="email">Tipe produk:</label>
                <input type="text" class="form-control" name="tipe_produk" value="{{ $stocks->tipe_produk }}" />
            </div>
            <div class="form-group">
                <label for="city">Stok barang saat ini:</label>
                <input type="text" class="form-control" name="stok" value="{{ $stocks->stok }}" />
            </div>
            <div class="form-group">
                <label for="country">Warna yang tersedia:</label>
                <input type="text" class="form-control" name="warna" value="{{ $stocks->warna }}" />
            </div>
            <div class="form-group">
                <label for="job_title">Ukuran yang tersedia:</label>
                <input type="text" class="form-control" name="ukuran" value="{{ $stocks->ukuran }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
