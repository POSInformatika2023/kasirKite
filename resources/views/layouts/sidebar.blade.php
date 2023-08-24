<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @if (auth()->user()->level == 1)
                <li>
                    <a href="{{ route('produk.index') }}">
                        <i class="fa fa-cube"></i> <span>Barang</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kategori.index') }}">
                        <i class="fa fa-cubes"></i> <span>Kategori</span>
                    </a>
                </li>




                {{-- <li>
                <a href="{{ route('pembelian.index') }}">
                    <i class="fa fa-download"></i> <span>Pembelian</span>
                </a>
            </li> --}}
                <li>
                    <a href="{{ route('penjualan.index') }}">
                        <i class="fa fa-file"></i> <span>Laporan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('setting.index') }}">
                        <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('transaksi.index') }}">
                        <i class="fa fa-cart-arrow-down"></i> <span>Transaksi</span>
                    </a>
                </li>
            @endif
            {{-- <li>
                <a href="{{ route('transaksi.baru') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi</span>
                </a>
            </li> --}}


            {{--            
            
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-users"></i> <span>User</span>
                </a>
            </li> --}}




        </ul>
    </section>

</aside>
