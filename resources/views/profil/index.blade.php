@extends('layouts.master')
@section('container')
<form action="profil/update" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
<div class="container">
    <h1>{{Auth::user()->name}}</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="dist/img/{{Auth::user()->foto}}" class="avatar img-circle" alt="avatar" width="230" height="230" id="foto-show">
          <h6 id="foto-info">Upload foto minimal 10KB maxsimal 1MB</h6>
          <input type="file" class="form-control" id="foto-input" name="foto" accept="image/*" >
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a>
          <strong>Horeee! </strong>{{Session::get('success')}}
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a>
          <strong>Oppssss! </strong>{{Session::get('error')}}
        </div>
        @endif
        <h3>Personal info</h3>

          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{Auth::user()->id}}">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->name}}" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{Auth::user()->email}}" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="{{Auth::user()->username}}"  name="username">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <div class=" input-group">
              <input class="form-control" type="password" value="" name="password" id="password" required="">
              <span class="input-group-addon" id="show-pass">
                  <li class="fa fa-eye"></li>
              </span>
            </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>

      </div>
  </div>
</div>
<hr>
</form>
@endsection
@section('js')
<script src="{{asset('js/page/profil.js')}}"></script>
@endsection