@extends ('layout.admin')
@section('content')
<div class="container">
  <h2>List Category Ordered By Total Medicines Price</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Total Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listdata as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->total_price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection