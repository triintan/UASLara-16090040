@extends('dashboard')
@section('main')

<section id="main-content">
<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Update User</h3>
    <div class="row mt">
    <div class="col-lg-12">
    <div class="form-panel">
            <!-- {!! Form::open(array('action' => 'BlogController@store', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data')) !!} -->
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap ']) !!}
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email ']) !!}
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username ']) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Password ']) !!}
                </div>
            </div>
            {!! Form::submit('Update', ['class' => 'btn btn-round btn-primary']) !!}
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