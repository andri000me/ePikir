@extends('template/master')

@section('content')
    @include('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Rencana Kerja'])

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Rencana Kerja</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        {{-- <embed src="{{base_url('upload/regulasi/'.$regulasi->file_regulasi)}}" type="application/pdf" width="100%" height="600px" /> --}}
                        <iframe src="{{ base_url('upload/renja/' . $renja->file_rk) }}" style="width:100%; height:80vh;"
                            frameborder="0"></iframe>
                        {{-- <iframe src="https://docs.google.com/viewer?url={{base_url('upload/regulasi/'.$regulasi->file_regulasi)}}&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe> --}}
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
@endsection
