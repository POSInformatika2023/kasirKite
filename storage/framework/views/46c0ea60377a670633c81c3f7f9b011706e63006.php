<?php $__env->startSection('title'); ?>
      Kasir
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>     
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-body text-center">
                    <h1>Selamat Datang</h1>
                    <h2>Anda login sebagai KASIR</h2>
                    <br><br>
                    <a href="<?php echo e(route('transaksi.baru')); ?>" class="btn btn-success btn-lg">Transaksi Baru</a>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasirkite\resources\views/kasir/dashboard.blade.php ENDPATH**/ ?>