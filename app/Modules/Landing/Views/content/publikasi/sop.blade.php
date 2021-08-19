@extends('template/master')

@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs"
        style="background-image: url({{ assets_front . 'images/background/wall-dark.jpg' }}); background-repeat: repeat; background-size: auto;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- <h2><i class="fa fa-pencil"></i>SOP Kelitbangan</h2> --}}
                    <ul>
                        <li><a href="{{ base_url('landing/home') }}"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-clone"></i>Publikasi</a></li>
                        <li class="active"><a href="javascript:void(0)"><i class="fa fa-clone"></i>SOP Kelitbangan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>SOP Kelitbangan</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        <img src="{{ base_url('upload/publikasi/' . $profil) }}" alt="" class="mx-auto"
                            style="margin-top: 70px">
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
@endsection
