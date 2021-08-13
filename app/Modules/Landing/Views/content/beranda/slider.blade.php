<!-- Hero Area -->
<section id="hero-area" class="hero-area">
    <!-- Slider -->
    <div class="slider-area">
        <!-- Single Slider -->
        @foreach ($carousel as $index => $item)
            <!-- Isi slide tidak boleh lebih dari 5 -->
            @if ($index < 5)
                <div class="single-slider"
                    style="background-image:url('{{ base_url('upload/slider/' . $item->file_carousel) }}')">
                    <div class="container">
                        <div class="row">
                            <!-- Modulus 3 jika sisa 1 -->
                            @if ($index % 3 == 1)
                                <div class="col-lg-5 col-md-6 col-12"></div>
                            @endif

                            <div class="{{ $index % 3 == 2 ? 'col-lg-10 offset-lg-1' : 'col-lg-7 col-md-6' }} col-12">
                                <!-- Slider Text -->
                                <div
                                    class="slider-text {{ $index % 3 == 0 ? 'text-left' : ($index % 3 == 1 ? 'text-right' : 'text-center') }}">
                                    {{-- <div style="background:#ffffff94; padding: 20px"> --}}
                                    <h1 style="text-shadow: 1px 1px 2px white; text-transform: none;">
                                        {!! $item->judul_carousel !!}</h1>
                                    <p style="text-shadow: 1px 1px 2px #2e2751; color: white">
                                        {{ $item->ket_carousel }}
                                    </p>
                                    {{-- </div> --}}

                                    {{-- <div class="button">
                                <a href="portfolio-3-column.html" class="btn">Our Portfolio</a>
                                <a href="https://www.youtube.com/watch?v=FZQPhrdKjow"
                                    class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
                            </div> --}}
                                </div>
                                <!--/ End Slider Text -->
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>
    <!--/ End Slider -->
</section>
<!--/ End Hero Area -->

@push('css_plugin')
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/owl.theme.default.css">
    <link rel="stylesheet" href="{{ assets_front }}css/owl.carousel.min.css">
@endpush

@push('js_plugin')
    <!-- Owl Carousel JS -->
    <script src="{{ assets_front }}js/owl.carousel.min.js"></script>
@endpush
