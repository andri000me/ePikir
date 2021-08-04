  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <div class="row">

          <div class="col-md-4 col-12">
            <div class="card pull-up bg-info">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left text-white">
                      <span>Total Permohonan Masuk</span>
                      <h3 class="text-white"><?= $jmlPemohon ?></h3>
                    </div>
                    <div class="align-self-center">
                      <i class="la la-paste font-large-2 float-right text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-12">
            <div class="card pull-up bg-success">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left text-white">
                      <span>Total Permohonan Diterima</span>
                      <h3 class="text-white"><?= $jmlDiterima ?></h3>
                    </div>
                    <div class="align-self-center">
                      <i class="la la-check-square font-large-2 float-right text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-12">
            <div class="card pull-up bg-danger bg-hexagons-danger">
              <div class="card-content">
                <div class="card-body ">
                  <div class="media d-flex">
                    <div class="media-body text-left text-white">
                      <span>Total Permohonan Ditolak</span>
                      <h3 class="text-white"><?= $jmlDitolak ?></h3>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-close font-large-2 float-right text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <hr>

        <div class="card bg-hexagons">
          <div class="card-header bg-blue-grey">
            <h4 class="card-title text-white">Permohonan Surat Keterangan</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li class="text-white"><a data-action="collapse"><i class="ft-minus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/dataPemohon/diajukan/' . encode('1')) ?>">
                    <div class="card pull-up bg-info">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-paste font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlSuketMasuk ?></h3>
                              <span>Masuk</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/dataPemohon/diproses/' . encode('1')) ?>">
                    <div class="card pull-up bg-primary">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-gear font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlSuketProses ?></h3>
                              <span>Diproses</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/perizinan/diterima/' . encode('1')) ?>">
                    <div class="card pull-up bg-success">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-check-square font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlSuketTerima ?></h3>
                              <span>Diterima</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/perizinan/ditolak/' . encode('1')) ?>">
                    <div class="card pull-up bg-danger">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-check-square font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlSuketTolak ?></h3>
                              <span>Ditolak</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <hr>

        <div class="card bg-hexagons">
          <div class="card-header bg-blue">
            <h4 class="card-title text-white">Permohonan Surat Izin Kegiatan Usaha</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li class="text-white"><a data-action="collapse"><i class="ft-minus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/dataPemohon/diajukan/' . encode('2')) ?>">
                    <div class="card pull-up bg-info">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-paste font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlSuzinMasuk ?></h3>
                              <span>Masuk</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/dataPemohon/diproses/' . encode('2')) ?>">
                    <div class="card pull-up bg-primary">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-gear font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlSuzinProses ?></h3>
                              <span>Diproses</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/perizinan/diterima/' . encode('2')) ?>">
                    <div class="card pull-up bg-success">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-check-square font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlSuzinTerima ?></h3>
                              <span>Diterima</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/perizinan/ditolak/' . encode('2')) ?>">
                    <div class="card pull-up bg-danger">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-check-square font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlSuzinTolak ?></h3>
                              <span>Ditolak</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <hr>

        <div class="card bg-hexagons">
          <div class="card-header bg-cyan">
            <h4 class="card-title text-white">Permohonan Surat Izin Kegiatan Non Usaha</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li class="text-white"><a data-action="collapse"><i class="ft-minus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/dataPemohon/diajukan/' . encode('3')) ?>">
                    <div class="card pull-up bg-info">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-paste font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlNikahMasuk ?></h3>
                              <span>Masuk</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/dataPemohon/diproses/' . encode('3')) ?>">
                    <div class="card pull-up bg-primary">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-gear font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlNikahProses ?></h3>
                              <span>Diproses</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/perizinan/diterima/' . encode('3')) ?>">
                    <div class="card pull-up bg-success">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-check-square font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlNikahTerima ?></h3>
                              <span>Diterima</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-12">
                  <a href="<?= base_url('Admin/perizinan/ditolak/' . encode('3')) ?>">
                    <div class="card pull-up bg-danger">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="la la-check-square font-large-2 float-right" style="color: white;"></i>
                            </div>
                            <div class="media-body text-white text-right">
                              <h3 class="text-white"><?= $jmlNikahTolak ?></h3>
                              <span>Ditolak</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>