@extends('layouts.home.main')

@section('body')
    @include('partials.home.navbar')
    @yield('body_content')
    @include('partials.home.footer')
@endsection
