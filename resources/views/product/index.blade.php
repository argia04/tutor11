<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Daftar Produk</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
rel="stylesheet">
</head>
<body class="container">
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
 </div>
 <script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></scr
ipt>
</body>
</html>
