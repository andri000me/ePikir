@extends('template/master')

@section('content')
    @include('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Dokumentasi Kegiatan'])

    <!-- Galeri Section -->
    <section id="portfolio" class="portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Dokumentasi Kegiatan</h1>
                        {{-- <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum
                            aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                        <p> --}}
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <!-- portfolio Nav -->
                    <div class="portfolio-nav">
                        <ul class="tr-list list-inline" id="portfolio-menu">
                            <li data-filter="*" class="cbp-filter-item active">Semua Galeri<div class="cbp-filter-counter">
                                </div>
                            </li>
                            @foreach ($kategori as $item)
                                <li data-filter=".{{ str_replace(' ', '-', strtolower($item->nama_kategori)) }}-x{{ $item->id_kg }}"
                                    class="cbp-filter-item">{{ $item->nama_kategori }}<div class="cbp-filter-counter">
                                    </div>
                                </li>
                            @endforeach
                            <li data-filter=".videos" class="cbp-filter-item">Video<div class="cbp-filter-counter">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/ End portfolio Nav -->
                </div>
            </div>
            <div class="portfolio-inner">
                <div class="row">
                    <div class="col-12">
                        <div id="portfolio-item">
                            @foreach ($galeri as $item)
                                <!-- Galeri -->
                                <div
                                    class="cbp-item {{ str_replace(' ', '-', strtolower($item->nama_kategori)) }}-x{{ $item->id_kg }} {{ $item->jenis_galeri == 2 ? 'videos' : '' }}">
                                    <div class="portfolio-single">
                                        <div class="portfolio-head">
                                            <img src="{{ $item->file_foto != null ? (!file_exists(realpath('upload/galeri/' . $item->file_foto)) ? base_url('assets/img/noimage/no_img3.jpg') : base_url('upload/galeri/' . $item->file_foto)) : ($item->link_video != null ? 'https://i.ytimg.com/vi_webp/' . get_segment($item->link_video) . '/sddefault.webp' : base_url('assets/img/noimage/no_img3.jpg')) }}"
                                                alt="#" />
                                        </div>
                                        <div class="portfolio-hover" style="padding: 15px">
                                            <h4 style="font-size: 12pt">
                                                @if ($item->jenis_galeri == 1)
                                                    <a data-fancybox="gallery1"
                                                        href="{{ base_url('upload/galeri/' . $item->file_foto) }}">{{ $item->judul_galeri }}</a>
                                                @else
                                                    <a href="{{ $item->link_video }}"
                                                        class="cbp-lightbox">{{ $item->judul_galeri }}</a>
                                                @endif
                                            </h4>
                                            <p style="font-size: 0.7rem;">
                                                {{ character_limiter($item->ket_galeri != null && $item->ket_galeri != '' ? $item->ket_galeri : $item->judul_galeri, 400, '...') }}
                                            </p>
                                            <div class="button" style="position: absolute; bottom: 15px;">
                                                @if ($item->jenis_galeri == 1)
                                                    <a class="primary" data-fancybox="gallery2"
                                                        href="{{ base_url('upload/galeri/' . $item->file_foto) }}"><i
                                                            class="fa fa-search"></i></a>
                                                @else
                                                    <a href="{{ $item->link_video }}" class="primary cbp-lightbox"><i
                                                            class="fa fa-play"></i></a>
                                                @endif

                                                {{-- <a href="portfolio-single.html"><i class="fa fa-link"></i></a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Galeri -->
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Galeri -->
@endsection
