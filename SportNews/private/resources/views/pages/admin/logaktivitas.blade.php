@extends('dashboard')
@section('main')


<section id="main-content">
<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Log Aktivitas</h3>
    <div class="row mt">
                    <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Log Aktivitas</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>aktivitas</th>
                              </tr>
                              </thead>
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