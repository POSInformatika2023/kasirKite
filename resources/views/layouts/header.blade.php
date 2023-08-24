<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <span class="logo-lg"><b>KasirKite</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{-- <img src="{{ url(auth()->user()->foto ?? '') }}" class="user-image img-profil" alt="User Image"> --}}
                        <span class="hidden-xs">{{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">


                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-flat"
                                onclick="$('#logout-form').submit()">Keluar</a>
                        </div>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
</form>
