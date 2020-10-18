@extends('admin.master')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    </div>

                    <div class="box-body">

                        <div class="text-center">
                            <h1>YOU ARE NOT AUTHORIZED TO SEE THIS CONTENT</h1>
                            <div>
                                <img class='img-responsive' style="display: block;margin-left: auto;margin-right: auto;width:50%"  src="{{ asset('backend/images/unauthorized-access.webp') }}"/>
                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </div>

    </section>

@endsection
