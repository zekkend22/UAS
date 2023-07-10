

<?php $__env->startSection('content'); ?>

 <div class="container">

 	<h3>Tambah Data </h3>
	 <form action="<?php echo e(url('/gudang')); ?>" method="POST">
		 <?php echo csrf_field(); ?>
	 	<table>
 			<tr>
 				<td>KODE</td>
 				<td><input type="text" name="gudang_kode"></td>
	 		</tr>
 			<tr>
 				<td>BARANG</td>
 				<td><input type="text" name="gudang_barang"></td>
 			</tr>
 			<tr>
 				<td>JENIS</td>
 				<td>
					<select name="gudang_jns" class="form-control">
						<option value="">--Pilih Jenis--</option>
						<option value="SOFTCASE">SOFTCASE</option>
						<option value="HARDCASE">HARDCASE</option>
						<option value="ANTICRACK">Anti Crack</option>
					</select>
				</td>
 			</tr>
 			<tr>
 				<td>JUMLAH</td>
 				<td><input type="text" name="gudang_jml"></td>
 			</tr>
 			<tr>
 				<td></td>

 				<td><input type="submit" value="SIMPAN"></td>
 			</tr>
 		</table>
 	</form>
 </div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_femo\resources\views/gudang/add.blade.php ENDPATH**/ ?>