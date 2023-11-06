@extends ('layout.admin')
@section('content')
<div class="container">
  <h2>Highest Stock of Medicine</h2>
  <p><b>Nama Obat</b> : {{$listdata->nama_obat}}</p>
  <p><b>Harga</b> : {{$listdata->harga}}</p>
  <p><b>Stok</b> : {{$listdata->stok}}</p>
</div>
@endsection