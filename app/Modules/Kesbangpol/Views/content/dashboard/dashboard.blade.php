@extends('template/master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row"> </div>
            <div class="content-body">
                <div class="row">

                    <div class="col-md-4 col-12">
                        <div class="card pull-up bg-info">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left text-white">
                                            <span>Total Permohonan Masuk</span>
                                            <h3 class="text-white">100</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="la la-paste font-large-2 float-right text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card pull-up bg-success">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left text-white">
                                            <span>Total Permohonan Diterima</span>
                                            <h3 class="text-white">100</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="la la-check-square font-large-2 float-right text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card pull-up bg-danger bg-hexagons-danger">
                            <div class="card-content">
                                <div class="card-body ">
                                    <div class="media d-flex">
                                        <div class="media-body text-left text-white">
                                            <span>Total Permohonan Ditolak</span>
                                            <h3 class="text-white">100</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-close font-large-2 float-right text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@push('css_plugin')
    <link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/fonts/simple-line-icons/style.css' }}">
@endpush

@push('js_plugin')
@endpush
