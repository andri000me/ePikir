<!-- Berita Terikini -->
<section class="blogs-main section"
    style="background-image: url('{{ assets_front . 'images/background/bg-11.png' }}')">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp">
                <div class="section-title">
                    <span class="title-bg" style="color:#4b396d85">Artikel</span>
                    <h1>Berita Terkini</h1>
                    {{-- <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula
                        bibendum
                        aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                    <p> --}}
                </div>
            </div>
        </div>
        @if ($berita != null && $berita != '')
            <div class="row" style="margin-top: 40px">
                <div class="col-12">
                    <div class="row blog-slider">
                        @foreach ($berita as $item)
                            <div class="{{ count($berita) > 3 ? 'col-lg-4' : '' }} col-12">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head">
                                        <img src="{{($item->file_foto != null?(!file_exists(realpath('upload/berita/'.$item->file_foto)))?base_url('assets/img/noimage/no_img3.jpg'):base_url('upload/berita/'.$item->file_foto):base_url('assets/img/noimage/no_img3.jpg') )}}" width="100%" height="265" alt="#">
                                    </div>
                                    <div class="blog-bottom">
                                        <div class="blog-inner">
                                            <h4><a
                                                href="{{ base_url('landing/berita_detail/' . encode($item->id_berita)) }}">{{ character_limiter($item->judul_berita, 50, '...') }}</a>
                                            </h4>
                                            <p>{{ character_limiter($item->isi_berita, 100, '...') }}</p>
                                            <div class="meta">
                                                <span><i class="fa fa-bullhorn"></i><a
                                                        href="{{ base_url('landing/berita/' . encode($item->id_kb)) }}">{{ $item->nama_kategori }}</a></span>
                                                <span><i
                                                        class="fa fa-calendar"></i>{{ date('d F Y', strtotime($item->waktu_update)) }}</span>
                                                {{-- <span><i class="fa fa-eye"></i><a href="#">333k</a></span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="button">
                        <a class="btn primary" href="{{ base_url('landing/berita') }}">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-12 text-center font-italic">
                    <div class="shadow p-3 mt-5 bg-white rounded"
                        style="color: #2e2751; box-shadow: 0px 2px 8px #a7a7a77a;">
                        <h5><i class="fa fa-newspaper-o"></i> Belum ada berita terkini.</h5>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
<!--/ End Berita Terikini -->

@push('css_style')
    <style>
        .blogs-main {
            background: #2e2751;
        }

        .blogs-main .button {
            text-align: center;
            margin-top: 50px;
        }

        .blogs-main .button .btn {
            border-radius: 30px;
        }

        .blogs-main .button .btn:hover {
            background: #fff;
            color: #2e2751;
        }

    </style>
@endpush
