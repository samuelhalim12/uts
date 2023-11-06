@extends ('layout.admin')
@section('content')
<div class="container">
  <h2>List Obat Batuk</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Obat</th>
        <th>Stok</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listdata as $data)
      <tr>
        <td>{{$data->idobat}}</td>
        <td>{{$data->nama_obat}}</td>
        <td>{{$data->stok}}</td>
        <td>{{$data->harga}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection