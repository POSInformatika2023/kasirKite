<?php $__env->startSection('title'); ?>
    Pengaturan
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <form action="<?php echo e(route('setting.update')); ?>" method="post" class="form-setting" data-toggle="validator"
                    enctype="multipart/form-data">

                    <?php echo csrf_field(); ?>
                    <div class="box-body">
                        <div class="alert alert-info alert-dismissible" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="icon fa fa-check"></i> Perubahan berhasil disimpan
                        </div>
                        <div class="form-group row">
                            <label for="nama_perusahaan" class="col-lg-2 control-label">Nama Toko</label>
                            <div class="col-lg-6">
                                <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan"
                                    required autofocus>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telepon" class="col-lg-2 control-label">Telepon</label>
                            <div class="col-lg-6">
                                <input type="text" name="telepon" class="form-control" id="telepon" required>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-lg-2 control-label">Alamat</label>
                            <div class="col-lg-6">
                                <textarea name="alamat" class="form-control" id="alamat" rows="3" required></textarea>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>




                    </div>
                    <div class="text-right box-header">
                        <button class="btn  btn-primary"><i class="fa fa-save"></i> Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function() {
            showData();

            $('.form-setting').validator().on('submit', function(e) {
                if (!e.preventDefault()) {
                    $.ajax({
                            url: $('.form-setting').attr('action'),
                            type: $('.form-setting').attr('method'),
                            data: new FormData($('.form-setting')[0]),
                            async: false,
                            processData: false,
                            contentType: false
                        })
                        .done(response => {
                            showData();
                            $('.alert').fadeIn();

                            setTimeout(() => {
                                $('.alert').fadeOut();
                            }, 3000);
                        })
                        .fail(errors => {
                            alert('Tidak dapat menyimpan data');
                            return;
                        });
                }
            });
        });

        function showData() {
            $.get('<?php echo e(route('setting.show')); ?>')
                .done(response => {
                    $('[name=nama_perusahaan]').val(response.nama_perusahaan);
                    $('[name=telepon]').val(response.telepon);
                    $('[name=alamat]').val(response.alamat);

                })
                .fail(errors => {
                    alert('Tidak dapat menampilkan data');
                    return;
                });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kasirkite\resources\views/setting/index.blade.php ENDPATH**/ ?>