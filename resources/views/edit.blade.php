@extends('bootstrap')

@section('content')
<div class="container my-2">
    <div class="jumbotron">
        <h1 class="display-4">Form Edit Data</h1>
        <form action="" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Produk </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$item->nama_produk}}" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket" required>{{$item->keterangan}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$item->harga}}" name="harga" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$item->jumlah}}" name="jumlah" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection