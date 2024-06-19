<nav class="sb-topnav navbar navbar-expand navbar-white bg-white shadow-sm justify-content-between">
    <a class="navbar-brand text-danger d-flex align-items-center" href="index.php">
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="40">
        <p class="m-0 d-lg-block d-none">Chicken World</p>
    </a>

    <div class="d-flex col-lg-10 col-md-3 col-6 justify-content-between">
        <button class="btn btn-link btn-sm order-1 order-lg-0 text-danger" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-danger" id="userDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                    {{ auth()->user()->name }}
                </a>
                <form action="{{ route('logout') }}" method="get" class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <input type="submit" name="logout" value="logout" class="dropdown-item">
                </form>
            </li>
        </ul>
    </div>
</nav>
