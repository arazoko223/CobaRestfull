@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Stock</h1>

    <div>
    <a style="margin: 19px;" href="{{ route('stock.create')}}" class="btn btn-primary">New Stock</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
       
          <td>nama_barang</td>
          <td>tanggal_update</td>
          <td>tipe_produk</td>
          <td>stok</td>
          <td>warna</td>
          <td>ukuran</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($stocks as $stockk)
        <tr>

            <td>{{$stockk->nama_barang}}</td>
            <td>{{$stockk->tanggal_update}}</td>
            <td>{{$stockk->tipe_produk}}</td>
            <td>{{$stockk->stok}}</td>
            <td>{{$stockk->warna}}</td>
            <td>{{$ukuran->ukuran}}</td>

            <td>
                <a href="{{ route('stock.edit',$stockk->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('stock.destroy', $stockk->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
