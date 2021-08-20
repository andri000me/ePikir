@extends('template/master')

@section('content')
    @include('template.breadcumbs',['group' => 'Profil', 'label' => 'Tugas Pokok & Fungsi'])

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Profil</span>
                        <h1>Tugas Pokok & Fungsi</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-lg-6 col-12">
                    <!-- Video -->
                    <div class="about-video">
                        <div class="single-video overlay">
                            <a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="video-popup mfp-fade"><i
                                    class="fa fa-play"></i></a>
                            <img src="{{ assets_front . 'images/gallery-4.jpg' }}" alt="#">
                        </div>
                    </div>
                    <!--/ End Video -->
                </div> --}}
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        {!! $profil !!}
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
@endsection

@push('css_style')
    <style>
        .profil ol,
        .profil ul {
            padding-left: 40px;
        }

    </style>
@endpush
