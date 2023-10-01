<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div>
            <button class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block" aria-label="Hamburger Button">
                <i class="fa-solid fa-bars"></i>
            </button>
            <button data-bs-toggle="offcanvas" data-bs-target=".sidebar" aria-controls="sidebar"
                aria-label="Hamburger Button" class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        {{-- <ul class="nav justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <form action="/logout_admin" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Log Out</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul> --}}
        {{-- <input type="text" placeholder="Search" class="search form-control" />
        <button class="btn btn-search d-flex justify-content-center align-items-center p-0" type="button">
            <img src="/menarra/assets/images/ic_search.svg" width="20px" height="20px" />
        </button> --}}
    </div>
</nav>
