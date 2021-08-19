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
                    <div class="about-content profil blogs-main archives text-justify"
                        style="background: none; margin-top: 10px;">

                        <div class="single-sidebar post-tab">
                            <!-- Tab Nav -->
                            <div class="row">
                                <div class="col-md-3"></div>
                                <ul class="nav nav-tabs justify-content-center col-md-6" id="myTab" role="tablist">
                                    <li class="nav-item col-md-6 mb-3">
                                        <a class="nav-link text-center active" data-toggle="tab" href="#perBulan" role="tab"
                                            style="border-radius: 30px;">
                                            <i class="fa fa-calendar-check-o"></i>Timeline</a>
                                    </li>
                                    <li class="nav-item col-md-6">
                                        <a class="nav-link text-center" data-toggle="tab" href="#perTahun" role="tab"
                                            style="border-radius: 30px;">
                                            <i class="fa fa-calendar"></i>Kalender</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ End Tab Nav -->
                            <div class="tab-content" id="myTabContent">
                                <!-- Agenda Per Bulan -->
                                <div class="tab-pane fade show active" id="perBulan" role="tabpanel">
                                    <h4 class="text-center">{{ showBulan(date('Y-m-d')) }}</h4>
                                    <!-- Timeline agenda per bulan-->
                                    <div class="timeline">
                                        @php
                                            //merubah string menjadi bilangan desimal
                                            $jml_agenda = floatval('0.' . (count($agenda_bln) * 2 + 4));
                                        @endphp
                                        @foreach ($agenda_bln as $index => $item)
                                            {{-- <!-- Looping style type warna timeline agar bervariasi --> --}}
                                            @if ($index % 3 == 0)
                                                @php
                                                    $type = 'type1';
                                                @endphp
                                            @elseif ($index % 3 == 1)
                                                @php
                                                    $type = 'type2';
                                                @endphp
                                            @else
                                                @php
                                                    $type = 'type3';
                                                @endphp
                                            @endif

                                            {{-- <!-- Letak posisi kanan & kiri --> --}}
                                            @if ($index % 2 == 0)
                                                @php
                                                    $fade = 'fadeInLeft';
                                                @endphp
                                            @else
                                                @php
                                                    $fade = 'fadeInRight';
                                                @endphp
                                            @endif

                                            <div class="timeline__event animated wow {{ $fade }} timeline__event--{{ $type }}"
                                                data-wow-delay="{{ $jml_agenda }}s">
                                                <div class="timeline__event__icon ">
                                                    <i class="fa fa-calendar-check-o"></i>
                                                </div>
                                                <div class="timeline__event__date">
                                                    {{ date('d/m/Y', strtotime($item->waktu_awal)) == date('d/m/Y', strtotime($item->waktu_akhir)) ? date('d', strtotime($item->waktu_awal)) . ' ' . date('M', strtotime($item->waktu_awal)) : date('d', strtotime($item->waktu_awal)) . ' ' . date('M', strtotime($item->waktu_awal)) . ' - ' . date('d', strtotime($item->waktu_akhir)) . ' ' . date('M', strtotime($item->waktu_akhir)) }}
                                                </div>
                                                <div class="timeline__event__content"
                                                    style="{{ date('Y-m-d', strtotime($item->waktu_awal)) == date('Y-m-d') ? 'background: #f6eca4 !important' : '' }}">
                                                    <div class="timeline__event__title">
                                                        {{ $item->judul_agenda }}
                                                    </div>
                                                    <div class="timeline__event__description">
                                                        <p>{!! $item->isi_agenda !!}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            @php
                                                //setiap looping akan bertambah 0.2 detik
                                                $jml_agenda += 0.2;
                                            @endphp
                                        @endforeach
                                    </div>
                                </div>
                                <!--/ End Agenda Per Bulan -->
                                <!-- Agenda Per Tahun -->
                                <div class="tab-pane fade show" id="perTahun" role="tabpanel">
                                    {{-- <div id='calendar'></div> --}}
                                    <iframe src="{{ base_url('landing/calendar') }}" style="width:100%; height:135vh;"
                                        frameborder="0" id="agenda_calendar"></iframe>
                                </div>
                                <!--/ End Agenda Per Tahun -->
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
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/timeline.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{base_url('assets/external/FullCalendar/main.min.css')}}"/> --}}
@endpush

{{-- @push('css_style')
    <style>
        .fc h2 {
            border-bottom: none !important;
            padding-bottom: 0px !important;
            font-size: 18.7pt !important;
        }

        .fc button {
            top: auto;
            width: auto !important;
            height: auto !important;
            /* background-color: #2e2751 !important; */
            position: relative !important;
        }

        .fc a {
            color: #ff8605;
        }

        @media(max-width: 480px){
            .fc-toolbar {
                display: block !important;
            }
        }
    </style>
@endpush --}}

{{-- @push('js_plugin')
    <script src="{{base_url('assets/external/FullCalendar/main.min.js')}}"></script>
    <script src='{{base_url('assets/external/FullCalendar/locales-all.js')}}'></script>
@endpush --}}

@push('js_script')
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
      
            var calendar = new FullCalendar.Calendar(calendarEl, {
                // themeSystem: themeSystem,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                // timeZone: 'UTC',
                locale: 'id',
                initialDate: '{{date('Y-m-d')}}',
                weekNumbers: true,
                navLinks: true, // can click day/week names to navigate views
                // editable: true,
                selectable: true,
                nowIndicator: true,
                dayMaxEvents: true, // allow "more" link when too many events
                // showNonCurrentDates: false,
                events: [
                    {
                        title: 'All Day Event',
                        start: '2020-09-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2020-09-07',
                        end: '2020-09-10'
                    },
                    {
                        // groupId: 999,
                        title: 'Repeating Event',
                        start: '2020-09-09T16:00:00'
                    },
                    {
                        // groupId: 999,
                        title: 'Repeating Event',
                        start: '2020-09-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2020-09-11',
                        end: '2020-09-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-09-12T10:30:00',
                        end: '2020-09-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2020-09-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-09-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2020-09-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2020-09-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2020-09-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2020-09-28'
                    }
                ]
            });
            calendar.render();
        });
    </script> --}}

    {{-- <script>
        var iframe = document.getElementById("agenda_calendar");
        iframe.onload = function() {
            iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 20 + 'px';
        }
    </script> --}}
@endpush
