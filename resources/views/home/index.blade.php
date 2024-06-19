@extends('layouts.home.content')
@section('body_content')
    <main>
        {{-- hero section --}}
        @include('home.sections.hero-section')

        {{-- serices --}}
        @include('home.sections.services')

        {{-- renungan --}}
        @include('home.sections.renungan')

        {{-- contact us --}}
        @include('home.sections.contact-us')

    </main>
@endsection
