@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit user</h4>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('user.update' , $user->id)}}">
                @csrf
                @method('PUT')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <input type="text" class="form-control" name="name" value="{{$user->name }}"> 
                    @error('name') 
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <input type="email" class="form-control" name="email" value="{{ $user->email}}">
                  </div>
                  @error('email') 
                  <p class="text-danger">{{ $message }}</p>
                @endif
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                      @error('password') 
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
              </div>

              <button type="submit" class="btn btn-primary pull-right">Update user</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection