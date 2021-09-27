<!-- Bidang & Sub Bidang -->
<section class="pricing-plan services section"
    style="background-image: url('{{ assets_front . 'images/background/bg-14.png' }}')">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp">
                <div class="section-title">
                    <span class="title-bg" style="text-transform: none !important; color: #e2e2e2b3">e-Pikir</span>
                    <h1>Bidang Penelitian & Pengembangan</h1>
                    {{-- <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum
                        aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                    <p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($bidang as $item)
                <div class="col-lg-4 col-12 wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Single Table -->
                    <div class="single-table">
                        <div class="single-service" style="padding: 30px 20px 30px 20px; border-top: 5px solid #2e2751;">
                            <i class="{{ $item->icon_bidang }}"></i>
                            <h2><a href="javascript:void(0)">{{ $item->nama_bidang }}</a></h2>
                            <hr>
                            <p>{{ $item->ket_bidang }}</p>
                        </div>
                    </div>
                    <!-- End Single Table-->
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--/ End Bidang & Sub Bidang -->

@push('css_style')
    <style>
        .single-table {
            background: #ffffff;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            transition: all 0.3s ease;
            -webkit-box-shadow: 0px 0px 10px rgb(0 0 0 / 15%);
            -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 0px 10px rgb(0 0 0 / 15%);
            border-radius: 5px;
            text-align: center;
            position: relative;
            margin-top: 30px;
            overflow: hidden;
            min-height: 285px;
        }

    </style>
@endpush
