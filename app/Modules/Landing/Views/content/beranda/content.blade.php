@extends('template/master')

@section('content')
    <!-- Slider Content-->
    @include('content/beranda/slider')

    <!-- Divider-->
    {{-- <div class="pricing" style="padding: 15px">
    </div> --}}

    <!-- Bidang Content-->
    @include('content/beranda/bidang')

    <!-- Info Content-->
    @include('content/beranda/info')

    <!-- Grafik Content-->
    @include('content/beranda/grafik')

    <!-- Berita Content-->
    @include('content/beranda/berita')

    <!-- Galeri Content -->
    @include('content/beranda/galeri')

@endsection
