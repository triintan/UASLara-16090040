@extends('dashboard')

@section('main')
<section id="main-content">
<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Posting Berita</h3>
    <div class="row mt">
    <div class="col-lg-12">
    <div class="form-panel">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-container">
                {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Cari Artikel']) !!}
                </div>
            </div>
            
        </div>
    </form>
    
    

    
    <div class="row">
        <div class="col-sm-9">
            <div class="panel panel-container">
                <div class="panel-body">
                @foreach($blogs as $blog)
                    <div class="article border-bottom">
                        <div class="row">
                        
                            <div class="col-xs-10 col-md-10">
                                    <p>{{ $blog->judul}}</p>
                                    <p>{{ $blog->isi}}</p>
                                    
                                    
                                    <div class="col-lg-1 no-padding">
                                        <div class="text-muted"><a href="{{ url('/home') }}/{{ $blog->id }}"><p>View</p></a></div>
                                    </div>
                                    <div class="col-lg-1 no-padding">
                                        <div class="text-muted"><a href="{{ url('list-post/edit') }}/{{ $blog->id }}"><p>Edit</p></a></div>
                                    </div>
                                    <div class="col-lg-1 no-padding">
                                        <div class="text-muted"><a href="{{ url('list-post/delete') }}/{{ $blog->id }}"><p>Delete<p></a></div>
                                    </div>
                                    <br><br><br>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            
                </div>
            </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
	

