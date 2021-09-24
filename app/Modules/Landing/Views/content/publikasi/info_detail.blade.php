@extends('template/master')

@section('content')
    @include('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Informasi Publik'])

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Informasi Publik</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        <div class="button">
                            <a href="{{ base_url('landing/info') }}" class="btn primary" style="z-index: 999"><i
                                    class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                        {{-- <embed src="{{base_url('upload/info/'.$info->file_info)}}" type="application/pdf" width="100%" height="600px" /> --}}
                        <iframe src="{{ base_url('upload/info/' . $info->file_info) }}" style="width:100%; height:80vh;"
                            frameborder="0"></iframe>
                        {{-- <iframe src="https://docs.google.com/viewer?url={{base_url('upload/info/'.$info->file_info)}}&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe> --}}
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
        .profil .button {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .profil .button .btn {
            border-radius: 30px;
        }

        .profil .button .btn:hover {
            background: #2e2751;
            color: #fff;
        }

    </style>
@endpush
