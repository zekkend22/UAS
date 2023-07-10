
<?php $__env->startSection('content'); ?>

 <div class="container">


<form class="form" method="get" action="<?php echo e(url('gudang/search')); ?>">
		<div class = "form-group w-50 mb-3">
			<label for="search" class="d-block mr-2">Pencarian</label>
			<input type="text"name="search" class="form-control w-75 d-inline" id="search" placeholder="cari berdasarkan nama">
			<button type="submit" class="btn btn-primary mb-1">Cari</button>
		</div>
</form>
<h3>Daftar Gudang <a href="<?php echo e(url('gudang/create')); ?>">Tambah Data</a></h3>

 <table>
 	<tr>
 		<td>Kode</td>
 		<td>Barang</td>
 		<td>Jenis</td>
 		<td>Jumlah</td>
 	</tr>

 <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 	<td><?php echo e($row->gudang_kode); ?></td>
 	<td><?php echo e($row->gudang_barang); ?></td>
 	<td><?php echo e($row->gudang_jns); ?></td>
 	<td><?php echo e($row->gudang_jml); ?></td>
    <td><a href="<?php echo e(url('gudang/' . $row->id_gudang . '/edit')); ?>">Edit</a></td>
    <td> <form action="<?php echo e(url('gudang/' . $row->id_gudang)); ?>" method="POST">
        <input name="_method" type="hidden" value="DELETE">
        <?php echo csrf_field(); ?>
        <button>Hapus</button>
        </form></td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 </div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_femo\resources\views/gudang/index.blade.php ENDPATH**/ ?>