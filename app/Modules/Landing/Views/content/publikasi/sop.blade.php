@extends('template/master')

@section('content')
    @include('template.breadcumbs',['group' => 'Publikasi', 'label' => 'SOP Kelitbangan'])

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
                        <img src="{{ check_image($profil, 'upload/publikasi') }}" alt="" class="mx-auto"
                            style="margin-top: 70px">
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
@endsection
