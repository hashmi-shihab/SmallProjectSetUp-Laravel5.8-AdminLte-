@extends('admin.master')

@section('content')

    <section class="content-header">
        <h1>
            Location List
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('locations.index')}}">locations</a></li>
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
                                    <strong>Location</strong>
                                    {{session()->get('message')}}
                                </div>
                        @endif
                        @if(session()->has('errormessage'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                                    &times;
                                </button>
                                <h4><i class="icon fa fa-ban"></i> Validation Error!</h4>
                                <strong>Location's</strong>
                                {{session()->get('errormessage')}}
                            </div>
                            @endif
                    </div>



                    <div class="box-body table-responsive no-padding">

                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                            <tr>
                                <th scope="col">Sl.</th>
                                <th scope="col">Location</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i =1;
                            @endphp
                            @foreach($locations as $location)
                                <tr>

                                    <td>{{$i++}}</td>
                                    <td>{{$location->l_name}}</td>
                                    <td nowrap>
                                        <form action="{{route('locations.destroy',$location->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="btn-danger fa fa-trash"  onclick="return confirm('Are you sure to delete')"></button>
                                        </form>
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
