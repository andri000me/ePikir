@extends('template/master')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <!-- Revenue, Hit Rate & Deals -->
      <div class="row">
        <div class="col-xl-6 col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Revenue</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body pt-0">
                <div class="row mb-1">
                  <div class="col-6 col-md-4">
                    <h5>Current week</h5>
                    <h2 class="danger">$82,124</h2>
                  </div>
                  <div class="col-6 col-md-4">
                    <h5>Previous week</h5>
                    <h2 class="text-muted">$52,502</h2>
                  </div>
                </div>
                <div class="chartjs">
                  <canvas id="thisYearRevenue" width="400" class="position-absolute"></canvas>
                  <canvas id="lastYearRevenue" width="400"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-12">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="card pull-up">
                <div class="card-header bg-hexagons">
                  <h4 class="card-title">Hit Rate <span class="danger">-12%</span></h4>
                  <a class="heading-elements-toggle"><i
                    class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show bg-hexagons">
                    <div class="card-body pt-0">
                      <div class="chartjs">
                        <canvas id="hit-rate-doughnut" height="275"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="card pull-up">
                  <div class="card-content collapse show bg-gradient-directional-danger ">
                    <div class="card-body bg-hexagons-danger">
                      <h4 class="card-title white">Deals <span class="white">-55%</span> <span
                        class="float-right"><span class="white">152</span><span
                        class="red lighten-4">/200</span></span>
                      </h4>
                      <div class="chartjs">
                        <canvas id="deals-doughnut" height="275"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted">Order Value </h6>
                          <h3>$ 88,568</h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-trophy success font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted">Calls</h6>
                          <h3>3,568</h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-call-in danger font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Revenue, Hit Rate & Deals -->

        <!-- Emails Products & Avg Deals -->
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Emails</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <p>Open rate <span class="float-right text-bold-600">89%</span></p>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="pt-1">Sent <span class="float-right"><span
                    class="text-bold-600">310</span>/500</span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar"
                    style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Top Products</h4>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a href="#">Show all</a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <tbody>
                      <tr>
                        <th scope="row" class="border-top-0">iPhone X</th>
                        <td class="border-top-0 text-right">2245</td>
                      </tr>
                      <tr>
                        <th scope="row">One Plus</th>
                        <td class="text-right">1850</td>
                      </tr>
                      <tr>
                        <th scope="row">Samsung S7</th>
                        <td class="text-right">1550</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center">Average Deal Size</h4>
            </div>
            <div class="card-content collapse show">
              <div class="card-body pt-0">
                <div class="row">
                  <div
                  class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                  <h6 class="danger text-bold-600">-30%</h6>
                  <h4 class="font-large-2 text-bold-400">$12,536</h4>
                  <p class="blue-grey lighten-2 mb-0">Per rep</p>
                </div>
                <div class="col-md-6 col-12 text-center">
                  <h6 class="success text-bold-600">12%</h6>
                  <h4 class="font-large-2 text-bold-400">$18,548</h4>
                  <p class="blue-grey lighten-2 mb-0">Per team</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Emails Products & Avg Deals -->

  </div>
</div>
</div>
<!-- END: Content-->
@endsection

@push('css_plugin')
<link rel="stylesheet" type="text/css"
href="{{ assets_url . 'app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css' }}">
<link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/vendors/css/charts/morris.css' }}">
<link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/fonts/simple-line-icons/style.css' }}">
@endpush

@push('js_plugin')
<script src="{{ assets_url }}app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
<script src="{{ assets_url }}app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
<script src="{{ assets_url }}app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
<script src="{{ assets_url }}app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"
type="text/javascript">
</script>
<script src="{{ assets_url }}app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"
type="text/javascript">
</script>
<script src="{{ assets_url }}app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
<script src="{{ assets_url }}app-assets/js/scripts/pages/dashboard-sales.js" type="text/javascript"></script>
@endpush
