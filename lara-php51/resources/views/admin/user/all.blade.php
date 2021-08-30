@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Simple Table</h4>
                    <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created at</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users  as  $user)
                                <tr>
                                    <td>6</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at}}</td> 
                                    <td> 
                                        <a class="btn btn-info"  href="{{route('user.show' , $user->id)}}">Show</a>
                                        <a class="btn btn-warning" href="{{route('user.edit' , $user->id)}}">Edit</a>
                                        {{-- <a class="btn btn-danger" href="{{route('user.delete' , $user->id)}}">Delete</a> --}}
                                        <form method="post" action="{{route('user.destroy' , $user->id)}}" class="pull-right">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger"> 
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- {{url("admin/user/create")}} --}}
            </div>
        </div>
    </div>
    <a href="{{route('user.create')}}" class="btn btn-primary pull-left">
        Add user<div class="ripple-container"></div>
    </a>
</div>
@endsection
