@extends('template/master')

@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs"
        style="background-image: url({{ assets_front . 'images/background/wall-dark.jpg' }}); background-repeat: repeat; background-size: auto;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- <h2><i class="fa fa-pencil"></i>Agenda</h2> --}}
                    <ul>
                        <li><a href="{{ base_url('landing/home') }}"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-clone"></i>Publikasi</a></li>
                        <li class="active"><a href="javascript:void(0)"><i class="fa fa-clone"></i>Agenda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Agenda</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        <!-- Timeline agenda -->
                        <div class="timeline"> 
                            <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
                              <div class="timeline__event__icon ">
                                <i class="fa fa-calendar-check-o"></i>
                              </div>
                              <div class="timeline__event__date">
                                20-08-2019
                              </div>
                              <div class="timeline__event__content ">
                                <div class="timeline__event__title">
                                  Birthday
                                </div>
                                <div class="timeline__event__description">
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                                </div>
                              </div>
                            </div>

                            <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
                              <div class="timeline__event__icon">
                                <i class="fa fa-calendar-check-o"></i>
                              </div>
                              <div class="timeline__event__date">
                                20-08-2019
                              </div>
                              <div class="timeline__event__content">
                                <div class="timeline__event__title">
                                  Lunch
                                </div>
                                <div class="timeline__event__description">
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in!</p>
                                </div>
                              </div>
                            </div>

                            <div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
                              <div class="timeline__event__icon">
                                <i class="fa fa-calendar-check-o"></i>
                          
                              </div>
                              <div class="timeline__event__date">
                                20-08-2019
                              </div>
                              <div class="timeline__event__content">
                                <div class="timeline__event__title">
                                  Exercise
                                </div>
                                <div class="timeline__event__description">
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in!</p>
                                </div>
                          
                              </div>
                            </div>

                            <div class="timeline__event animated fadeInUp timeline__event--type1">
                              <div class="timeline__event__icon">
                                <i class="fa fa-calendar-check-o"></i>
                          
                              </div>
                              <div class="timeline__event__date">
                                20-08-2019
                              </div>
                              <div class="timeline__event__content">
                                <div class="timeline__event__title">
                                  Birthday
                                </div>
                                <div class="timeline__event__description">
                                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum quidem dolorem in!</p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
@endsection

@push('css_plugin')
    <link rel="stylesheet" type="text/css" href="{{base_url('assets/css/timeline.css')}}"/>
@endpush
