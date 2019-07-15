@extends('dashboard')
@section('main')
<section id="main-content">
<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Posting Berita</h3>
    <div class="row mt">
    <div class="col-lg-12">
    <div class="form-panel">
            {!! Form::open(array('action' => 'BlogController@store', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data')) !!}
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                  <div class="col-sm-10">
                    {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Judul Berita ']) !!}
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Isi Berita</label>
                  <div class="col-sm-10">
                    {!! Form::textarea('isi', '', ['class' => 'form-control' . ( $errors->has('isi') ? ' is-invalid' : '' ),
                   'placeholder' => 'Isi Berita']) !!}
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-10">
                    {!! Form::file('image', ['class' => '', 'onchange'=>'readURL(this);']) !!} 
                    </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-10">
                    {{Form::select("kategori",['sepakbola' => 'Sepakbola', 'basket' => 'Basket', 'badminton' => 'Badminton'], null,
                                ["class" => "form-control", "placeholder" => "--- Pilih Kategori ---"])}}
                    </div>
            </div>
            {!! Form::submit('Post', ['class' => 'btn btn-round btn-primary']) !!}
            {!! Form::submit('Batal', ['class' => 'btn btn-round btn-warning']) !!}

             {!! Form::close() !!}
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