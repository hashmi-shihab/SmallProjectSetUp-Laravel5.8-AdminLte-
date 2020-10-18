@extends('admin.master')

@section('content')

    <section class="content-header">
        <h1>
            Users List
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('users.index')}}">Users List</a></li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box" style="border-top-color: #605ca8 !important">
                    <div class="box-header">
                        @if(session()->has('message'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                                        &times;
                                    </button>
                                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                                    <strong>User</strong>
                                    {{session()->get('message')}}
                                </div>
                        @endif
                        @if(session()->has('errormessage'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                                    &times;
                                </button>
                                <h4><i class="icon fa fa-ban"></i> Restricted!</h4>
                                <strong>You</strong>
                                {{session()->get('errormessage')}}
                            </div>
                            @endif
                    </div>



                    <div class="box-body table-responsive no-padding">

                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                            <tr>
                                <th scope="col">Sl.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i =1;
                            @endphp
                            @foreach($users as $user)
                                <tr>

                                    <td>{{$i++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td nowrap>
                                        @if($user->id == 1)
                                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary fa fa-pencil"></a>
                                        @else
                                            <form action="{{route('users.destroy',$user->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary fa fa-pencil"></a>
                                                @if(Auth::id() == 1)
                                                <button type="submit"  class="btn btn-danger fa fa-trash"  onclick="return confirm('Are you sure to delete')"></button>
                                                @endif
                                            </form>
                                            @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>


@endsection

@section('jsscript')

    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        });
    </script>


@endsection
