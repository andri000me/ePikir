@extends('template.master')

@section('content')
    @include('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Berita/Artikel'])
    
    <!-- Blogs Area -->
    <section class="blogs-main archives section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
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
                                                href="{{ base_url('landing/berita_detail/' . encode($item->id_berita)) }}">{{ character_limiter($item->judul_berita, 50, '...') }}</a>
                                            </h4>
                                            <p>{{ character_limiter($item->isi_berita, 120, '...') }}</p>
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
                    <div class="row">
                        <div class="col-12">
                            {!!$pager->links('berita', 'pagination_style')!!}
                        </div>
                    </div>	
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Blog Sidebar -->
                    <aside class="blog-sidebar">
                        <div class="header">
                            <div class="search-form active">
                                <a class="icon" href="#"><i class="fa fa-search"></i></a>
                                <form class="form" action="#">
                                    <input placeholder="Search &amp; Enter" type="search">
                                </form>
                            </div>
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
                        <!--/ End Blog Category -->									
                        {{-- <!-- Blog Tags -->
                        <div class="single-sidebar tags">
                            <h2><span><i class="fa fa-tag"></i>Popular Tags</span></h2>
                            <ul>
                                <li><a href="#">Consulting</a></li>			
                                <li><a href="#">Business</a></li>	
                                <li><a href="#">Website</a></li>	
                                <li><a href="#">Design</a></li>	
                                <li><a href="#">Service</a></li>	
                                <li><a href="#">Digital Seo</a></li>	
                            </ul>
                        </div>
                        <!--/ End Blog Tags --> --}}
                    </aside>
                    <!--/ End Blog Sidebar -->
                </div>
            </div>		
        </div>
    </section>
    <!--/ End Blogs Area -->
@endsection