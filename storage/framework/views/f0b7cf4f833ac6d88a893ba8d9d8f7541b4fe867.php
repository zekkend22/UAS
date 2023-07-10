
 <?php $__env->startSection('content'); ?>

	 <div class="container">

 		<h3>Edit Data</h3>
 		<form action="<?php echo e(url('/gudang/' . $row->id_gudang)); ?>" method="POST">
 			<input name="_method" type="hidden" value="PATCH">
			 <?php echo csrf_field(); ?>
 				<table>
 					<tr>
 						<td>KODE</td>
 						<td><input type="text" name="gudang_kode" value="<?php echo e($row->gudang_kode); ?>"></td>
 					</tr>
 					<tr>
 						<td>BARANG</td>
 						<td><input type="text" name="gudang_barang" value="<?php echo e($row->gudang_barang); ?>"></td>
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
 						<td><input type="text" name="gudang_jml" value="<?php echo e($row->gudang_jml); ?>"></td>
 					</tr>
 					<tr>
 						<td></td>
 						<td><input type="submit" value="UPDATE"></td>
 						</tr>
 				</table>
		 </form>
 	</div>

 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_femo\resources\views/gudang/edit.blade.php ENDPATH**/ ?>