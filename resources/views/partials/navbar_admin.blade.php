<!-- Nav Sidebar -->
<nav class="sidebar offcanvas-md offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false">
    <div class="d-flex justify-content-end m-3 d-block d-md-none">
        <button aria-label="Close" data-bs-dismiss="offcanvas" data-bs-target=".sidebar" class="btn p-0 border-0 fs-4">
            <i class="fas fa-close"></i>
        </button>
    </div>
    <div class="d-flex justify-content-center mt-md-5 mb-5">
        <div class="logo d-flex">
            <img src="/icons/logo.png" alt="" width="200" height="90"
                class="d-inline-block align-text-top">
        </div>
    </div>
    <div class="pt-2 d-flex flex-column gap-5">
        <div class="menu p-0">
            <p>Daily Use</p>
            <a href="/pendaftaran" class="item-menu {{ Request::is('pendaftaran') ? 'active' : '' }}">
                <img src="/icons/document.png" width="30px" alt="" style="margin-right: 8px">
                Pendaftaran
            </a>
            <p>Entry Data</p>
            <a href="/datapasien" class="item-menu {{ Request::is('datapasien') ? 'active' : '' }}">
                <img src="/icons/patient.png" width="30px" alt="" style="margin-right: 8px">
                Data Pasien
            </a>
            <a href="/datapelayanan" class="item-menu {{ Request::is('datapelayanan') ? 'active' : '' }}">
                <img src="/icons/health.png" width="30px" alt="" style="margin-right: 8px">
                Data Pelayanan
            </a>
        </div>
    </div>
</nav>
