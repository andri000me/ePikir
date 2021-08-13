<!-- Grafik -->
<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title wow fadeInUp">
                    <span class="title-bg">Grafik</span>
                    <h1 style="margin-top: 5px">Rekapitulasi</h1>
                    {{-- <p>contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old
                    <p> --}}
                </div>
            </div>
        </div>
        <!-- Grafik -->
        <div class="row" style="margin-top: 55px">
            <!-- Bar Chart -->
            <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.8s">
                <div id="bar_chart"></div>
            </div>
            <!-- End Bar Chart -->

            <!-- Pie Chart -->
            <div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.6s">
                <div id="pie_chart"></div>
            </div>
            <!-- End Pie Chart -->
        </div>
        <!-- Digital -->
        <div class="row fun-facts" style="padding: 0px;">
            <div class="col-lg-6 col-md-12 col-12 wow fadeIn" data-wow-delay="0.6s">
                <!-- Single Fact -->
                <div class="single-fact">
                    <div class="icon"><i class="fa fa-file-text"></i></div>
                    <div class="counter">
                        <p><span class="count">35</span> Pengajuan</p>
                        <h4>Ijin penelitian bulan ini</h4>
                    </div>
                </div>
                <!--/ End Single Fact -->
            </div>
            <div class="col-lg-6 col-md-12 col-12 wow fadeIn" data-wow-delay="0.8s">
                <!-- Single Fact -->
                <div class="single-fact">
                    <div class="icon"><i class="fa fa-file-text"></i></div>
                    <div class="counter">
                        <p><span class="count">88</span> Pengajuan</p>
                        <h4>Ijin pengabdian masyarakat bulan ini</h4>
                    </div>
                </div>
                <!--/ End Single Fact -->
            </div>
            <div class="col-lg-6 col-md-12 col-12 wow fadeIn" data-wow-delay="0.8s">
                <!-- Single Fact -->
                <div class="single-fact">
                    <div class="icon"><i class="fa fa-file-text"></i></div>
                    <div class="counter">
                        <p><span class="count">5</span> Usulan</p>
                        <h4>Usulan Penelitian bulan ini</h4>
                    </div>
                </div>
                <!--/ End Single Fact -->
            </div>
            <div class="col-lg-6 col-md-12 col-12 wow fadeIn" data-wow-delay="0.8s">
                <!-- Single Fact -->
                <div class="single-fact">
                    <div class="icon"><i class="fa fa-file-text"></i></div>
                    <div class="counter">
                        <p><span class="count">3</span> Usulan</p>
                        <h4>Usulan Inovasi Daerah bulan ini</h4>
                    </div>
                </div>
                <!--/ End Single Fact -->
            </div>
        </div>
    </div>
</section>
<!--/ End Grafik -->

@push('js_plugin')
    <!-- Highchart JS -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
@endpush

@push('js_script')
    <!-- Bar Chart -->
    <script>
        Highcharts.chart('bar_chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Monthly Average Rainfall'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            credits: {
                enabled: false
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Rainfall (mm)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tokyo',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

            }, {
                name: 'New York',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

            }, {
                name: 'London',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

            }, {
                name: 'Berlin',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

            }]
        });
    </script>
@endpush

@push('js_script')
    <!-- Pie Chart -->
    <script>
        Highcharts.chart('pie_chart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares in January, 2018'
            },
            credits: {
                enabled: false
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Chrome',
                    y: 61.41,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Internet Explorer',
                    y: 11.84
                }, {
                    name: 'Firefox',
                    y: 10.85
                }, {
                    name: 'Edge',
                    y: 4.67
                }, {
                    name: 'Safari',
                    y: 4.18
                }, {
                    name: 'Other',
                    y: 7.05
                }]
            }]
        });
    </script>
@endpush
