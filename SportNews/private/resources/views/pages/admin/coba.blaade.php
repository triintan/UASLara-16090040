@extends('dashboard')
@section('main')

<section id="main-content">
<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Edit Berita</h3>
    <div class="row mt">
    <div class="col-lg-12">
    <div class="form-panel">
{!! Form::model($blogs, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['list-post.update', $blogs->id]]) !!}
        {!! Form::submit('Edit', ['class' => 'btn btn-round btn-primary']) !!}
        {!! Form::submit('Batal', ['class' => 'btn btn-round btn-warning']) !!}
        </div>
    </div>
    
  <!-- <form action="" method="post"> -->
	
        <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                  <div class="col-sm-10">
                {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Tulis Judul Berita]) !!}
                </div>
            </div>
            
                <div class="panel panel-container">
				{!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-xs-6 col-md-3">
                <div class="panel panel-container">
				{{Form::select("kategori",['sepakbola' => 'Sepakbola', 'basket' => 'Basket', 'badminton' => 'Badminton'], null,
                                ["class" => "form-control", "placeholder" => "--- Pilih Kategori ---"])}}

                                {!! Form::hidden('foto', null, ['class' => 'form-control']) !!}
                            {!! Form::hidden('id', null, ['class' => 'form-control']) !!}
					{!! Form::file('foto', ['class' => '', 'onchange'=>'readURL(this);']) !!}
                    <img id="blah" src='http://placehold.it/180' alt="your image" /> 
                    
                </div>
            </div>
        </div>
		{!! Form::close() !!}
 <!--</form> -->
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