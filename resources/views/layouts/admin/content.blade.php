@extends('layouts.admin.main')

@section('body')
    <div id="app">
        <div class="main-wrapper">
            <!-- Header -->
            @include('partials.admin.navbar')

            <!-- Sidebar -->
            @include('partials.admin.sidebar')

            <!-- Content -->
            <div class="main-content">
                <section class="section">
                    @yield('main')
                </section>
            </div>

            <!-- Footer -->
            @include('partials.admin.footer')
        </div>
    </div>
@endsection
