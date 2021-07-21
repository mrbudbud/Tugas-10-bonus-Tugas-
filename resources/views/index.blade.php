@extends('bootstrap')

@section('title', 'Index')

@section('content')

    <div class="container my-2">
        <div class="jumbotron">
            <h1 class="display-4">Tugas 10 - (Bonus Tugas)</h1>
            <h3 class="lead">Di bawah ini aplikasi CRUD sederhana saya yang menggunakan Framword Laravel</h3>
            <hr class="my-4">
        </div>


        <div class="card">
            <div class="card-header">
              <center><h3>Tabel Produk</h3></center>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
            </div>
            @endif
        </div>
        <a href="{{route('tambah')}}" class="btn btn-primary my-3">Tambah Produk</a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 0 ?>
            @foreach ($produk as $item)
            <?php $i++; ?>
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$item->nama_produk}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>
                        <a href="{{route('edit', $item->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('hapus', $item->id)}}">
                            <button type="button" onClick="return konfirmasi()" class="btn btn-danger btn-sm">
                              Hapus
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>

    <script>
        function konfirmasi () {
          var pilihan = confirm('Apakah Anda Yakin Hapus Data ini?')
          if (pilihan) {
            return true
          } else{
            return false
          }
        }
    </script>

@endsection

