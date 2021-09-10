@extends('template/master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row"> </div>
            <div class="content-body">
                <h2>Total Permohonan Bulan Ini</h2>
                <hr>
                <div class="card">
                    <div class="card-header bg-teal">
                        <h4 class="card-title text-white">Izin Penelitian</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li class="text-white"><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body" style="padding: 2rem;">
                            <div class="row">

                                <div class="col-md-4 col-12">
                                    <div class="card pull-up bg-info mb-1">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Masuk</span>
                                                        <h3 class="text-white">{{ $tot_per_bln['ipl']['masuk'] }}</h3>
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
                                    <div class="card pull-up bg-success mb-1">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Diterima</span>
                                                        <h3 class="text-white">{{ $tot_per_bln['ipl']['diterima'] }}
                                                        </h3>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <i
                                                            class="la la-check-square font-large-2 float-right text-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="card pull-up bg-danger mb-1">
                                        <div class="card-content">
                                            <div class="card-body ">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Ditolak</span>
                                                        <h3 class="text-white">{{ $tot_per_bln['ipl']['ditolak'] }}
                                                        </h3>
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

                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-white">Izin Pengabdian</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li class="text-white"><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body" style="padding: 2rem;">
                            <div class="row">

                                <div class="col-md-4 col-12">
                                    <div class="card pull-up bg-info mb-1">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Masuk</span>
                                                        <h3 class="text-white">{{ $tot_per_bln['ipb']['masuk'] }}</h3>
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
                                    <div class="card pull-up bg-success mb-1">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Diterima</span>
                                                        <h3 class="text-white">{{ $tot_per_bln['ipb']['diterima'] }}
                                                        </h3>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <i
                                                            class="la la-check-square font-large-2 float-right text-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="card pull-up bg-danger mb-1">
                                        <div class="card-content">
                                            <div class="card-body ">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Ditolak</span>
                                                        <h3 class="text-white">{{ $tot_per_bln['ipb']['ditolak'] }}
                                                        </h3>
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

                {{-- ================================================ --}}

                <h2>Total Permohonan Tahun Ini</h2>
                <hr>
                <div class="card">
                    <div class="card-header bg-purple">
                        <h4 class="card-title text-white">Izin Penelitian</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li class="text-white"><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body" style="padding: 2rem;">
                            <div class="row">

                                <div class="col-md-4 col-12">
                                    <div class="card pull-up bg-info mb-1">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Masuk</span>
                                                        <h3 class="text-white">{{ $tot_per_thn['ipl']['masuk'] }}
                                                        </h3>
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
                                    <div class="card pull-up bg-success mb-1">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Diterima</span>
                                                        <h3 class="text-white">{{ $tot_per_thn['ipl']['diterima'] }}
                                                        </h3>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <i
                                                            class="la la-check-square font-large-2 float-right text-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="card pull-up bg-danger mb-1">
                                        <div class="card-content">
                                            <div class="card-body ">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Ditolak</span>
                                                        <h3 class="text-white">{{ $tot_per_thn['ipl']['ditolak'] }}
                                                        </h3>
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

                <div class="card">
                    <div class="card-header bg-pink">
                        <h4 class="card-title text-white">Izin Pengabdian</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li class="text-white"><a data-action="collapse"><i class="ft-minus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body" style="padding: 2rem;">
                            <div class="row">

                                <div class="col-md-4 col-12">
                                    <div class="card pull-up bg-info mb-1">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Masuk</span>
                                                        <h3 class="text-white">{{ $tot_per_thn['ipb']['masuk'] }}
                                                        </h3>
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
                                    <div class="card pull-up bg-success mb-1">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Diterima</span>
                                                        <h3 class="text-white">{{ $tot_per_thn['ipb']['diterima'] }}
                                                        </h3>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <i
                                                            class="la la-check-square font-large-2 float-right text-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="card pull-up bg-danger mb-1">
                                        <div class="card-content">
                                            <div class="card-body ">
                                                <div class="media d-flex">
                                                    <div class="media-body text-left text-white">
                                                        <span>Permohonan Ditolak</span>
                                                        <h3 class="text-white">{{ $tot_per_thn['ipb']['ditolak'] }}
                                                        </h3>
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
