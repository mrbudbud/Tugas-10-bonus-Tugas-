@extends('bootstrap')

@section('title', 'Tambah')

@section('content')
<div class="container my-2">
    <div class="jumbotron">
        <h1 class="display-4">Form Tambah Data</h1>
        <form action="{{route('store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Produk </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}"  name="nama" required>
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea class="form-control @error('ket') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="ket" required>{{ old('ket') }}</textarea>
                    @error('ket')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" name="harga" required>
                    @error('harga')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}" name="jumlah" required>
                    @error('jumlah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection