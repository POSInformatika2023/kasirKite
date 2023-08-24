<div class="modal fade" id="modal-produk" tabindex="-1" role="dialog" aria-labelledby="modal-produk">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pilih Barang</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-produk">
                    <thead>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td width="5%"><?php echo e($key + 1); ?></td>
                                <td><span><?php echo e($item->kode_produk); ?></span></td>
                                <td><?php echo e($item->nama_produk); ?></td>
                                <td><?php echo e($item->harga_beli); ?></td>
                                <td>
                                    <a href="#" class="btn btn-primary "
                                        onclick="pilihProduk('<?php echo e($item->id_produk); ?>', '<?php echo e($item->kode_produk); ?>')">
                                        <i class="fa fa-check"></i>
                                        Pilih
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\kasirkite\resources\views/penjualan_detail/produk.blade.php ENDPATH**/ ?>