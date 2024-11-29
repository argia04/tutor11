 @extends('template')

 @section('title', 'Daftar Produk')

 @section('content')

 <div class="row justify-content-center mt-5">
 <div class="col-md-8">
 @if(session('success'))
 <div class="alert alert-success">{{ session('success') }}</div>
 @endif
 <div class="d-flex justify-content-between align-items-center mb-3">
 <span>{{ session('msg') }}</span>
 <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah</a>
 </div>
 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>Nama</th>
<th>Harga</th>
<th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 @foreach($products as $product)
<tr>
 <td>{{ $product->name }}</td>
<td>{{ $product->price }}</td>
<td>
 <a href="{{ route('product.edit', $product->id) }}" 
class="btn btn-sm btn-primary">Edit</a>
 <form method="POST" action="{{ route('product.destroy', 
$product->id) }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
 @csrf 
@method('DELETE')
<button class="btn btn-sm btn-danger">Hapus</button>
 </form>
 </td>
 </tr> 
@endforeach
 </tbody>
 </table>
 </div>
@endsection