@extends('layouts.app')
@section('content')

 <div class="container">


<form class="form" method="get" action="{{ url('gudang/search') }}">
		<div class = "form-group w-50 mb-3">
			<label for="search" class="d-block mr-2">Pencarian</label>
			<input type="text"name="search" class="form-control w-75 d-inline" id="search" placeholder="cari berdasarkan nama">
			<button type="submit" class="btn btn-primary mb-1">Cari</button>
		</div>
</form>
<h3>Daftar Gudang <a href="{{ url('gudang/create') }}">Tambah Data</a></h3>

 <table>
 	<tr>
 		<td>Kode</td>
 		<td>Barang</td>
 		<td>Jenis</td>
 		<td>Jumlah</td>
 	</tr>

 @foreach($rows as $row)
 <tr>
 	<td>{{ $row->gudang_kode }}</td>
 	<td>{{ $row->gudang_barang }}</td>
 	<td>{{ $row->gudang_jns }}</td>
 	<td>{{ $row->gudang_jml }}</td>
    <td><a href="{{ url('gudang/' . $row->id_gudang . '/edit') }}">Edit</a></td>
    <td> <form action="{{ url('gudang/' . $row->id_gudang) }}" method="POST">
        <input name="_method" type="hidden" value="DELETE">
        @csrf
        <button>Hapus</button>
        </form></td>
 </tr>
 @endforeach
 </table>
 </div>

 @endsection