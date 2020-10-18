@extends('admin.master')

@section('content')

    <section class="content-header">
        <h1>
            Add Locations
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('locations.index') }}">Locations</a></li>
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
                <form method="post" action="{{route('locations.store')}}" >

                    @csrf
                    @method('POST')

                    <div class="box-body">
                        <div class="form-group">
                            <label class="required-field">Location Name &nbsp</label>
                            <input type="text" name="l_name" class="form-control" style="text-transform: capitalize" id="name" aria-describedby="" placeholder="Enter Location Name" value="{{old('l_name')}}" required>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-sm" style="background-color: #605ca8 !important">Submit</button>
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
