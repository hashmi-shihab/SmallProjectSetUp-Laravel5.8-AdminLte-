@extends('admin.master')

@section('content')

    <section class="content-header">
        <h1>
            Edit User
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('users.index') }}">User List</a></li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary" style="border-top-color: #605ca8 !important">
                    <div class="box-header">
                        @if(count($errors)>0)
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                                    &times;
                                </button>
                                <h4><i class="icon fa fa-ban"></i> Validation Error!</h4>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <form method="POST" action="{{route('users.update',$user->id)}}" >

                        @csrf
                        @method('PUT')

                        <div class="box-body">
                            <div class="form-group">
                                <label class="required-field">Name &nbsp</label>
                                <input type="text" name="name" class="form-control" style="text-transform: capitalize" id="name" placeholder="Enter User Name" value="{{$user->name}}" required>
                            </div>
                            <div class="form-group">
                                <label class="required-field">Email &nbsp</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter User Email" value="{{$user->email}}" required>
                            </div>
                            {{--<div class="form-group">
                                <label class="required-field">Password &nbsp</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter User Password" value="{{old('password')}}{{$user->password}}" required>
                            </div>--}}
                            @if(Auth::id()==1)
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter User Password" autocomplete="off" value="{{$user->password}}">
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="Enter confirm password" value="{{$user->password}}" autocomplete="off">
                            </div>
                                @endif
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-sm" style="background-color: #605ca8 !important">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>


@endsection
