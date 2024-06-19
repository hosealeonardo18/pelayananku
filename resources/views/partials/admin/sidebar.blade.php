@php
    $slug = request()->route('slug'); // 'slug' adalah nama parameter yang diinginkan
@endphp

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/{{ $slug }}/dashboard" class="fw-bolder"><img src="/assets/images/navbar/logo.png"
                    alt="navbar-brand" style="width: 30px; height: 30px">Pelayananku</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/{{ $slug }}/dashboard"><img src="/assets/images/navbar/logo.png" alt="navbar-brand"
                    style="width: 30px; height: 30px"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('*dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="/{{ $slug }}/dashboard"><i class="fas fa-pencil-ruler fa-fw">
                    </i> <span>Dashboard</span>
                </a>
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <form action="/{{ $slug }}/logout" method="post">
                @csrf
                <button class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-sign-out-alt fa-fw"></i> Logout
                </button>
            </form>
        </div>
    </aside>
</div>
