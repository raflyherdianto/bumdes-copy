<header class="p-3 mb-1">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <img src="/images/LogoKabupatenMalang.png" alt="" style="width: 60px">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 d-none d-lg-flex">
                <li><a href="/home" class="nav-link px-4 text-black {{ Request::is('home') ? 'nav-active' : "" }}" style="font-weight: 600">Beranda</a></li>
                <li><a href="/e-catalog" class="nav-link px-4 text-black {{ Request::is('e-catalog') ? 'nav-active' : "" }}" style="font-weight: 600">E-Katalog</a></li>
                <li><a href="/simpan-pinjam" class="nav-link px-4 text-black {{ Request::is('simpan-pinjam') ? 'nav-active' : "" }}" style="font-weight: 600">Simpan Pinjam</a>
                </li>
                <li><a href="/data-masyarakat" class="nav-link px-4 text-black {{ Request::is('data-masyarakat') ? 'nav-active' : "" }}" style="font-weight: 600">Data
                        Masyarakat</a></li>
            </ul>
            
            <div class="dropdown text-end ">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle d-lg-none"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list" style="font-size: 24px"></i>
                </a>
                <p style="width:"></p>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="/home">Beranda</a></li>
                    <li><a class="dropdown-item" href="/e-catalog">E-Katalog</a></li>
                    <li><a class="dropdown-item" href="/simpan-pinjam">Simpan Pinjam</a></li>
                    <li><a class="dropdown-item" href="/data-masyarakat">Data Masyarakat</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
