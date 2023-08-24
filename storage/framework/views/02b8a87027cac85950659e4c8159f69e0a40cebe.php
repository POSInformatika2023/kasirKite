<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <?php if(auth()->user()->level == 1): ?>
                <li>
                    <a href="<?php echo e(route('produk.index')); ?>">
                        <i class="fa fa-cube"></i> <span>Barang</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('kategori.index')); ?>">
                        <i class="fa fa-cubes"></i> <span>Kategori</span>
                    </a>
                </li>




                
                <li>
                    <a href="<?php echo e(route('penjualan.index')); ?>">
                        <i class="fa fa-file"></i> <span>Laporan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('setting.index')); ?>">
                        <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                    </a>
                </li>
            <?php else: ?>
                <li>
                    <a href="<?php echo e(route('transaksi.index')); ?>">
                        <i class="fa fa-cart-arrow-down"></i> <span>Transaksi</span>
                    </a>
                </li>
            <?php endif; ?>
            


            




        </ul>
    </section>

</aside>
<?php /**PATH C:\xampp\htdocs\kasirkite\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>