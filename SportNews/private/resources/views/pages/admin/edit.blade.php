@extends('dashboard')
@section('main')

<section id="main-content">
<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Edit Berita</h3>
    <div class="row mt">
    <div class="col-lg-12">
    <div class="form-panel">
{!! Form::model($blogs, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['list-post.update', $blogs->id]]) !!}
    
  <!-- <form action="" method="post"> -->
  
        <div class="row">
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Judul</label>
            <div class="col-sm-10">
                <div class="panel panel-container">
                {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Tulis Judul Artikel!']) !!}
                </div>
              </div>
            </div>

        
          <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Isi Berita</label>
            <div class="col-sm-10">
                <div class="panel panel-container">
                  {!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
                </div>
            </div>
          </div>
       

          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
            <div class="col-sm-10">
              <div class="panel panel-container">
              {{Form::select("kategori",['sepakbola' => 'Sepakbola', 'basket' => 'Basket', 'badminton' => 'Badminton'], null,["class" => "form-control", "placeholder" => "--- Pilih Kategori ---"])}}
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Foto</label>
         <div class="col-sm-10">
          <div class="panel panel-container">
            {!! Form::hidden('foto', null, ['class' => 'form-control']) !!}
            {!! Form::hidden('id', null, ['class' => 'form-control']) !!}
            {!! Form::file('foto', ['class' => '', 'onchange'=>'readURL(this);']) !!}
            <br>
            {!! Form::submit('Edit', ['class' => 'btn btn-round btn-primary']) !!}
            {!! Form::submit('Batal', ['class' => 'btn btn-round btn-warning']) !!}
          </div>
        </div>
      </div>
  </div>
  </div>
</div>
</div>
</section>
</section>
    {!! Form::close() !!}
 <!--</form> -->
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