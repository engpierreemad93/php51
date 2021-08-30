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
            <form method="post" action="{{route('user.store')}}">
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Username</label>
                    <input type="text" class="form-control" name="name"> 
                    @error('name') 
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Email address</label>
                    <input type="email" class="form-control" name="email">
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
              <div class="row">
                  <div class="col-md-12">
                    <select name="role">
                       @foreach ( $roles as $role )
                           <option value="{{$role->id}}">{{$role->name}}</option>
                       @endforeach
                    </select>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Add user</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection