<nav class="navbar navbar-expand-lg" style="height: 100px">
    <div class="container">
        <a class="navbar-brand fw-bolder" href="/"><img src="/assets/images/navbar/logo.png" alt="navbar-brand"
                style="width: 50px; height: 50px"><span
                style="font-size: 26px; color: #3A86FF;font-family: 'Gill Sans', sans-serif;">{{ env('APP_NAME') }}</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto gap-lg-5">
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Event <i class="fa-solid fa-angle-down fa-fw ms-2" style="color: #3A86FF;"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pelayanan <i class="fa-solid fa-angle-down fa-fw ms-2" style="color: #3A86FF;"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tentang Kami <i class="fa-solid fa-angle-down fa-fw ms-2" style="color: #3A86FF;"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

            <div class="container-cta d-flex gap-2">
                <button class="btn-cta btn-cta-warning fw-bold px-4">Masuk</button>
                <button class="btn-cta btn-cta-primary fw-bold px-4">Pendaftaran</button>
            </div>
        </div>
    </div>
</nav>

<script src="/assets/js/dropdown.js"></script>
