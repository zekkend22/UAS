@extends('layouts.app')
 @section('content')

	 <div class="container">

 		<h3>Edit Data</h3>
 		<form action="{{ url('/gudang/' . $row->id_gudang) }}" method="POST">
 			<input name="_method" type="hidden" value="PATCH">
			 @csrf
 				<table>
 					<tr>
 						<td>KODE</td>
 						<td><input type="text" name="gudang_kode" value="{{ $row->gudang_kode }}"></td>
 					</tr>
 					<tr>
 						<td>BARANG</td>
 						<td><input type="text" name="gudang_barang" value="{{ $row->gudang_barang }}"></td>
					</tr>
 					<tr>
 						<td>JENIS</td>
 				<td>
					<select name="gudang_jns" class="form-control">
						<option value="">--Pilih Jurusan--</option>
						<option value="SOFTCASE">SOFTCASE</option>
						<option value="HARDCASE">HARDCASE</option>
						<option value="ANTICRACK">Anti Crack</option>
					</select>
				</td>
 					<tr>
 						<td>JUMLAH</td>
 						<td><input type="text" name="gudang_jml" value="{{ $row->gudang_jml }}"></td>
 					</tr>
 					<tr>
 						<td></td>
 						<td><input type="submit" value="UPDATE"></td>
 						</tr>
 				</table>
		 </form>
 	</div>

 @endsection

