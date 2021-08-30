@extends('template.master')

@section('content')
    @include('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Berita/Artikel'])

    <!-- Berita/Artikel Content -->
    <section class="blogs-main archives single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row nothing" style="padding-top: 31px; margin-bottom: -20px;">
                        <div class="col-md-8">
                            <div class="share-post-link" style="padding-block: 5px; margin-bottom: 5px;">
                                <div class="sharethis-inline-share-buttons"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="button" style="margin-top: 0px;">
                                <a class="btn primary w-100 float-right" href="{{ base_url('landing/berita') }}">Lihat
                                    Semua Berita</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="{{ check_image($berita->file_foto, 'upload/berita') }}" width="100%"
                                        height="500" alt="#">
                                </div>
                                <div class="blog-inner">
                                    <div class="blog-top">
                                        <div class="meta">
                                            <span><i class="fa fa-bullhorn"></i><a
                                                    href="{{ base_url('landing/berita?kategori=' . encode($berita->id_kb)) }}">{{ $berita->nama_kategori }}</a></span>
                                            <span><i
                                                    class="fa fa-calendar"></i>{{ formatTanggalTtd($berita->waktu_update) }}</span>
                                            {{-- <span><i class="fa fa-eye"></i><a href="#">333k</a></span> --}}
                                        </div>
                                        {{-- <ul class="social-share">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul> --}}
                                    </div>
                                    <h2>{{ $berita->judul_berita }}</h2>
                                    <p>{{ $berita->isi_berita }}</p>
                                    <div class="bottom-area btn-page-arrow row">
                                        <!-- Next Prev -->
                                        <ul class="arrow col-md-8 offset-md-2 col-12 d-flex flex-wrap">
                                            <li
                                                class="prev {{ $berita_prev == null ? 'btn-disabled' : '' }} col-md-6 col-12 border-0 mb-2 px-1">
                                                <a
                                                    href="{{ $berita_prev != null ? base_url('landing/berita/detail/' . encode($berita_prev->id_berita)) : 'javascript:void(0)' }}"><i
                                                        class="fa fa-angle-double-left"></i> Post Sebelumnya</a>
                                            </li>
                                            <li
                                                class="next {{ $berita_next == null ? 'btn-disabled' : '' }} col-md-6 col-12 px-1">
                                                <a
                                                    href="{{ $berita_next != null ? base_url('landing/berita/detail/' . encode($berita_next->id_berita)) : 'javascript:void(0)' }}">Post
                                                    Selanjutnya <i class="fa fa-angle-double-right"></i></a>
                                            </li>
                                        </ul>
                                        <!--/ End Next Prev -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>

                        <div class="col-12">
                            <div class="blog-comments">
                                <h2 class="title">Kirim Komentar</h2>
                                <div class="fb-comments" data-href="{{ current_url() }}" data-numposts="10"
                                    data-width="100%" data-colorscheme="light"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Blog Sidebar -->
                    <aside class="blog-sidebar">
                        <!-- Form Cari Berita -->
                        <div class="blogs-main archives single" style="padding: 0px">
                            {!! form_open(base_url('landing/berita'), 'class="form" id="formSearchBerita" method="GET"') !!}
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" name="search" placeholder="Cari Berita & Enter"
                                        value="{{ $search != null ? $search : '' }}" required="required">
                                </div>
                                <div class="col-sm-2 btn-search">
                                    <button type="submit" class="btn btn-primary" style="top: 0px" title="Cari"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Berita/Artikel Terkini -->
                        <div class="single-sidebar post-tab">
                            <h2><span><i class="fa fa-newspaper-o"></i>Berita Terkini</span></h2>
                            <!-- Single Post -->
                            @foreach ($berita_terkini as $item)
                                <div class="single-post">
                                    <div class="post-img">
                                        <img src="{{ check_image($item->file_foto, 'upload/berita') }}" alt="#">
                                    </div>
                                    <div class="post-info">
                                        <h4><a
                                                href="{{ base_url('landing/berita/detail/' . encode($item->id_berita)) }}">{{ character_limiter($item->judul_berita, 45, '...') }}</a>
                                        </h4>
                                        <p><i class="fa fa-calendar"></i>{{ formatTanggalTtd($item->waktu_update) }}</p>
                                    </div>
                                </div>
                            @endforeach
                            <!--/ End Single Post -->
                        </div>

                        <!-- Blog Category -->
                        <div class="single-sidebar category">
                            <h2><span><i class="fa fa-pencil"></i>Kategori Berita</span></h2>
                            <ul>
                                @foreach ($kategori as $item)
                                    <li><a href="{{ base_url('landing/berita?kategori=' . encode($item->id_kb)) }}"><i
                                                class="fa fa-caret-right"></i>{{ $item->nama_kategori }}<span>({{ $item->jml_berita }})</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </aside>
                    <!--/ End Blog Sidebar -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Berita/Artikel Content -->
@endsection

@push('css_style')
    <!-- Button form search -->
    <style>
        @media(min-width: 768px) {
            .form .btn-search {
                padding-left: 0px;
            }

            .form .btn-search button {
                height: 100%;
            }
        }

        @media(min-width: 991px) {
            .btn-page-arrow .prev {
                padding-left: 40px !important;
            }

            .btn-page-arrow .next {
                padding-right: 40px !important;
            }
        }

        @media(max-width: 575px) {
            .form .btn-search button {
                margin-top: 15px !important;
            }
        }

        @media(max-width: 767px) {
            .sharethis-inline-share-buttons {
                text-align: center !important;
            }
        }

    </style>

    <!-- Button share medsos -->
    <style>
        .share-post-link .st-btn {
            border-radius: 30px !important;
        }

    </style>

    <!-- Button next/prev post berita -->
    <style>
        .btn-disabled {
            pointer-events: none;
            cursor: default;
        }

        .btn-disabled a {
            background: #c7c7c7 !important;
        }

    </style>

    <style>
        .nothing .button {
            text-align: center;
            margin-top: 30px;
        }

        .nothing .button .btn {
            border-radius: 30px;
        }

        .nothing .button .btn:hover {
            background: #2e2751;
            color: #fff;
        }

    </style>
@endpush

@push('js_plugin')
    <script type='text/javascript'
        src='//platform-api.sharethis.com/js/sharethis.js#property=5c1d0e8ab56cdb0011e86fe3&product=inline-share-buttons'
        async='async'></script>
@endpush

@push('js_script')
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endpush
