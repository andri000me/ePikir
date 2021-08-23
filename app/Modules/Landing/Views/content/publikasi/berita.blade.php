@extends('template.master')

@section('content')
    @include('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Berita/Artikel'])
    
    <!-- Berita/Artikel Content -->
    <section class="blogs-main archives section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    @if ($berita != null && $berita != '')
                        @if ($search != null)
                            <div class="row nothing" style="padding-top: 31px;">
                                <div class="col-md-8">
                                    <h4 style="margin-bottom: 5px;">Ditemukan: {{ $berita_count }} artikel</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="button" style="margin-top: 0px;">
                                        <a class="btn primary w-100 float-right" href="{{ base_url('landing/berita') }}" style="margin-bottom: -12px;">Lihat Semua Berita</a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            @foreach ($berita as $item)
                                <div class="col-lg-6 col-12">
                                    <!-- Single Blog -->
                                    <div class="single-blog">
                                        <div class="blog-head">
                                            <img src="{{($item->file_foto != null?(!file_exists(realpath('upload/berita/'.$item->file_foto)))?base_url('assets/img/noimage/no_img3.jpg'):base_url('upload/berita/'.$item->file_foto):base_url('assets/img/noimage/no_img3.jpg') )}}" width="100%" height="265" alt="#">
                                        </div>
                                        <div class="blog-bottom">
                                            <div class="blog-inner">
                                                <h4><a
                                                    href="{{ base_url('landing/berita/detail/' . encode($item->id_berita)) }}">{{ character_limiter($item->judul_berita, 50, '...') }}</a>
                                                </h4>
                                                <p>{{ character_limiter($item->isi_berita, 120, '...') }}</p>
                                                <div class="meta">
                                                    <span><i class="fa fa-bullhorn"></i><a href="{{ base_url('landing/berita?kategori=' . encode($item->id_kb)) }}">{{ $item->nama_kategori }}</a></span>
                                                    <span><i class="fa fa-calendar"></i>{{ formatTanggalTtd($item->waktu_update) }}</span>
                                                    {{-- <span><i class="fa fa-eye"></i><a href="#">333k</a></span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Blog -->
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {!!$pager->links('berita', 'pagination_style')!!}
                            </div>
                        </div>	
                    @else
                        <div class="row nothing">
                            <div class="col-lg-12 col-12 text-center">
                                <div class="shadow p-3 bg-white rounded"
                                    style="color: #2e2751; box-shadow: 0px 2px 8px #a7a7a77a; margin-top: 30px">
                                    <h5 class="font-italic"><i class="fa fa-newspaper-o"></i> {{ $search != null ? 'Berita/artikel yang dicari tidak ditemukan.' : 'Belum ada berita/artikel yang diposting.' }} </h5>
                                    @if ($search != null)
                                        <div class="button">
                                            <a class="btn primary" href="{{ base_url('landing/berita') }}">Lihat Semua Berita</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Blog Sidebar -->
                    <aside class="blog-sidebar">
                        <!-- Form Cari Berita -->
                        <div class="blogs-main archives single" style="padding: 0px">
                            {!! form_open(base_url('landing/berita'), 'class="form" id="formSearchBerita" method="GET"'); !!}
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <input type="text" name="search" placeholder="Cari Berita & Enter" value="{{ $search != null ? $search : '' }}" required="required">
                                    </div>
                                    <div class="col-sm-2 btn-search">
                                        <button type="submit" class="btn btn-primary" style="top: 0px" title="Cari"><i class="fa fa-search"></i></button>
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
                                        <img src="{{($item->file_foto != null?(!file_exists(realpath('upload/berita/'.$item->file_foto)))?base_url('assets/img/noimage/no_img3.jpg'):base_url('upload/berita/'.$item->file_foto):base_url('assets/img/noimage/no_img3.jpg') )}}" alt="#">
                                    </div>
                                    <div class="post-info">
                                        <h4><a href="{{base_url('landing/berita/detail/'.encode($item->id_berita))}}">{{ character_limiter($item->judul_berita, 45, '...') }}</a></h4>
                                        <p><i class="fa fa-calendar"></i>{{formatTanggalTtd($item->waktu_update)}}</p>
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
                                    <li><a href="{{base_url('landing/berita?kategori='.encode($item->id_kb))}}"><i class="fa fa-caret-right"></i>{{$item->nama_kategori}}<span>({{$item->jml_berita}})</span></a></li>		
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
    <style>
        @media(min-width: 768px) {
            .form .btn-search {
                padding-left: 0px;
            }

            .form .btn-search button {
                height: 100%;
            }
        }

        @media(max-width: 767px) {
            .form .btn-search button {
                margin-top: 15px !important;
            }
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
