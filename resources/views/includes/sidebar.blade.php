<aside class="app-sidebar bg-primary-subtle shadow" data-bs-theme="dark">

    <div class="sidebar-brand">

        <a href="./index.html" class="brand-link">

            <img style="margin-left: -2rem;" src="{{ asset('img/logo.png') }}" alt="lara start Logo"
                class="brand-image opacity-100 shadow pr-2" />

            <span class="brand-text ">LARA START</span>
        </a>

    </div>


    <div class="image d-flex mt-3">

        <img style="margin-left: 1.5rem;" width="20%" src="{{ asset('img/profile.png') }}"
            class="img-circle elevation-2 pl-3" alt="User Image">
        <a style="text-decoration: none; color:white; margin-top: 0.5rem; margin-left: 1rem;" href="#"
            class="d-block fs-5 ">Alexander Pierce</a>
    </div>




    <div class="sidebar-wrapper">
        <nav class="mt-2">

            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="./generate/theme.html" class="nav-link">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Theme Generate</p>
                    </a>
                </li>
            </ul>

        </nav>
    </div>

</aside>
