@extends('dashboard')
@section('main')

<section id="main-content">
<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Data Pengunjung</h3>
    <div class="row mt">
                    <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Data Pengunjung</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>View</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                    <td>1</td>
                                    <td>Jadwal Perempatfinal Copa America 2019</td>
                                    <td>20</td>
                              </tr>
                              <tr>
                                    <td>2</td>
                                    <td>Timnas Basket Diprediksi Dirombak Besar-besaran Andai Toro Gantikan Wahyu Cacing</td>
                                    <td>11</td>
                              </tr>
                              <tr>
                                    <td>3</td>
                                    <td>Kevin/Marcus Kalah, Indonesia Tanpa Gelar di Kejuaraan Bulutangkis Asia</td>
                                    <td>9</td>
                              </tr>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->         
            </div><!-- /row -->

</section>
</section>

@stop

@section('footer')
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2019 - Sport News
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
@stop