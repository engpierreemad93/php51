@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add user</h4>
          </div>
          <div class="card-body">
            <form method="" action="">
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}"> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <input type="email" class="form-control" name="email" value="{{ $user->email}}">
                  </div>
                </div>
              </div>

              <a type="submit" class="btn btn-primary pull-right" href="{{ route('user.index')}}">Back</a >
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection